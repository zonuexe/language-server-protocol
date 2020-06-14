import {
    SyntaxKind,
    TypeNode,
    ArrayTypeNode,
    UnionTypeNode,
    TupleTypeNode,
    ParenthesizedTypeNode,
    Node,
    TypeReferenceNode,
    isTypeNode,
    isTypeReferenceNode,
    isIdentifier
} from 'typescript';

export class PhpType
{
    real: string|null;
    documented: string;

    constructor (real: string, documented: string)
    {
        this.real = real;
        this.documented = documented;
    }
}

export class TypeConverter
{
    phpType(type: TypeNode|TypeReferenceNode|null): PhpType {
        if (null === type) {
            return new PhpType(null,'');
        }

        if (SyntaxKind[type.kind] == 'StringKeyword') {
            return new PhpType('string','string');
        }

        if (SyntaxKind[type.kind] == 'BooleanKeyword') {
            return new PhpType('string','string');
        }

        if (SyntaxKind[type.kind] == 'AnyKeyword') {
            return new PhpType(null, 'mixed');
        }

        if (SyntaxKind[type.kind] == 'NullKeyword') {
            return new PhpType(null, 'null');
        }

        if (SyntaxKind[type.kind] == 'NumberKeyword') {
            return new PhpType('int', 'int');
        }

        if (SyntaxKind[type.kind] == 'ObjectKeyword') {
            return new PhpType('object', 'object');
        }

        if (SyntaxKind[type.kind] == 'TupleType') {
            return this.phpTypeTuple(type as TupleTypeNode);
        }

        if (SyntaxKind[type.kind] == 'TypeLiteral') {
            return new PhpType(null, 'type literal ...');
        }

        if (SyntaxKind[type.kind] == 'ParenthesizedType') {
            return this.phpTypeParenthesis(type as ParenthesizedTypeNode);
        }

        if (SyntaxKind[type.kind] == 'ArrayType') {
            return this.phpTypeArray(type as ArrayTypeNode);
        }

        if (SyntaxKind[type.kind] == 'LiteralType') {
            return new PhpType(null, type.getText());
        }

        if (SyntaxKind[type.kind] == 'UnionType') {
            return this.phpTypeUnion(type as UnionTypeNode);
        }

        if (isTypeReferenceNode(type) && isIdentifier(type.typeName)) {
            return new PhpType(type.typeName.escapedText.toString(), type.typeName.escapedText.toString());
        }

        return new PhpType(null,'');
    }

    private phpTypeParenthesis(type: ParenthesizedTypeNode): PhpType {
        return new PhpType(null, `(${this.phpType(type.type).documented})`);
    }

    private phpTypeArray(type: ArrayTypeNode): PhpType {
        return new PhpType('array', `array<${this.phpType(type.elementType).documented}>`);
    }

    private phpTypeUnion(type: UnionTypeNode): PhpType {
        return new PhpType(
            'object',
            type.types.map((type: TypeNode) => {
                return this.phpType(type).documented
            }).join('|')
        );
    }

    private phpTypeTuple(type: TupleTypeNode): PhpType {
        const types = type.elementTypes.map((type: TypeNode) => {
            return this.phpType(type).documented;
        }).join(',');

        return new PhpType(
            'array',
            `array{${types}}`
        );
    }
}
