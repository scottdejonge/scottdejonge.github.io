---
layout: default
permalink: /styleguide/index.html
title: Style Guide
description: "A demonstration of the visual styles of the various elements that comprise the design of this site including headings and typographic styles."
---

This page exists to demonstrate the visual styles of the various elements that comprise the design of this site.

## Heading Level 2

Second level headings are used to split text into sections. First level headings are only used once per page, in the page or post title. [Hyperlinks](/styleguide) are underlined and change colour when hovered.

```markdown
## Heading Level 2
```

### Heading Level 3

Third level headings are most often used to denote names rather than sections, so have a lower visual priority.

```markdown
### Heading Level 3
```

#### Heading Level 4

Fourth level headings are used to split-up longer text into smaller sub-sections. Headings should be short and descriptive of the content they contain.

```markdown
#### Heading Level 4
```

## Adjacent Heading Level 2

### To a Sibling Heading Level 3

Adjacent headings of decending levels remove the `margin-top` from the younger sibling heading to reduce spacing.

```markdown
## Adjacent Heading Level 2

### To a Sibling Heading Level 3
```

## Typographic Styles

### Ordered List

1. This is a ordered list.
2. Ordered lists can also have multiple levels:
  1. This is a second-level ordered list item

```markdown
1. This is a ordered list.
2. Ordered lists can also have multiple levels:
  1. This is a second-level ordered list item
```

### Unordered List

1. This is a unordered list.
2. Unordered lists can also have multiple levels:
  1. This is a second-level unordered list item

```markdown
1. This is a unordered list.
2. Unordered lists can also have multiple levels:
  1. This is a second-level unordered list item
```

### Blockquote

Blockquotes are used to "pullout" content and quotes to give them visual dominance, and therefore, impact to whatever text they feature.

> This is a blockquote of featured text that has been pulled out of paragraph content

```markdown
> This is a blockquote of featured text that has been pulled out of paragraph content
```

### Code

Inline `code` examples are styled with a monospace typeface and are coloured.

```markdown
`code`
```

Codeblocks have syntax highlighting

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
    
  </body>
</html>
```

### References

References are applied with the footnote syntax `[^footnote]`.

e.g. A line of text that references footnote syntax [^footnote].

[^footnote]: [Reference link text](https://scottdejonge.com)

```markdown
[^footnote]: [Reference link text](https://scottdejonge.com)
```
