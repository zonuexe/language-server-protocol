import {Writer} from './writer';
import {PhpClassResolver, PhpClasses, PhpClass} from './phpClassResolver';
import {Renderer} from './renderer';

export class Transpiler
{
    writer: Writer;
    renderer: Renderer;

    constructor (writer: Writer, renderer: Renderer) {
        this.writer = writer;
        this.renderer = renderer;
    }

    transpile(phpClasses: PhpClasses): void {
        phpClasses.forEach((phpClass: PhpClass) => {
            this.writer.write(phpClass.name, this.renderer.render(phpClass));
        });
    }
}

