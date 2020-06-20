import {Renderer} from "./renderer";
import {Writer} from './writer';
import {TypeConverter,createEntityMap} from './typeConverter';
import {Transpiler} from './transpiler';
import {ScriptTarget, createSourceFile}  from "typescript"
import {readFileSync} from 'fs';
import {PhpClassResolver} from './phpClassResolver';
import * as path from 'path';

const paths: string[] = [
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.foldingRange.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.workspaceFolders.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.progress.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.colorProvider.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.declaration.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.typeDefinition.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.implementation.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.selectionRange.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-types', 'lib', 'umd', 'main.d.ts'),
    path.resolve(__dirname, '../ts/stubs.ts'),
];

const nodes = paths.map((file: string) => {
    const node = createSourceFile(
        file,
        readFileSync(file, 'utf8'),
        ScriptTarget.Latest,
        true
    );

    return node;
});

const entityMap = createEntityMap(nodes);
const typeConverter = new TypeConverter(entityMap);
const phpClassResolver = new PhpClassResolver(entityMap, typeConverter);
const phpClasses = phpClassResolver.fromEntityMap(entityMap);

const transpiler = new Transpiler(
    new Writer(path.resolve(__dirname, '..', 'src')),
    new Renderer()
);

transpiler.transpile(phpClasses);
