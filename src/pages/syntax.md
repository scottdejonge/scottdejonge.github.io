---
layout: default
permalink: /syntax/index.html
title: Syntax
---

## CSS

### @ rule

```css
@media screen and (max-width: 40rem) {}
```

### Commment

```css
/* Comment text */
.selector {}
```

### Custom Properties

```css
.selector {
  border-radius: var(--border-radius);
  color: hsl(var(--hue), 80%, 50%);
}
```

### Important

```css
.hide {
  display: none !important;
}
```

### Properties

```css
.selector {
  background-image: linear-gradient(to bottom, hsla(220, 80%, 80%, 0.5), hsl(220, 80%, 50%, 0.5));
  color: hsl(220, 80%, 50%);
  display: block;
  font-size: 1.25rem;
  font-weight: 500;
}
```

### Selectors

```css
a {
  text-decoration: underline;
}
```

### String

```css
.selector {
  content: 'text';
}
```

### URL

```css
.selector {
  content: url('image.png');
}
```

## HTML

### Attribute

```html
<div aria-hidden="true"></div>
```

### Comment

```html
<!-- Comment text -->
Regular text
```

### DOCTYPE

```html
<!DOCTYPE html>
<html></html>
```

### Embedded CSS & JavaScript

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Page title</title>
    <style>
      @media print {
        p {
          color: red !important;
        }
      }
    </style>
  </head>
  <body>
    <h1>Heading</h1>
    <script>
      if (true) {
        console.log('foo');
      }
    </script>
  </body>
</html>
```

### Empty tag

```html
<p></p>
```

### Entity

```html
&amp;
```

### Invalid

```html
</p <p>
```

### Multiline tag

```html
<p
  class="value"
>
  Text
</p>
```

## JavaScript

### Assignment

```js
const CONSTANT = 10;
const truthy = true;
let pageTitle = 'Page title';
```

### Comment

#### Block

```js
/**
 * Block comment
 */
```

#### Inline

```js
// Inline comment
```

### Import

```js
import { component as child } from 'index.js'
```

### Indentation

```js
if (true) {
  while (true) {
    doSomething();
  }
}
```

### Operators

```js
(1 + 2 * 3)/4 >= 3 && 4 < 5 || 6 > 7
```

### Regex

```js
const regex = /([^/])\/(\\?.|\[.+?])+?\/[gim]{0,3}/g;
const regex = /\/\*[\w\W]*?\*\//g;
```

### Template string

```js
const temp = `I am ${age} years old`;
```

## Markdown

```md
# Heading

## Content

### Text

Text block with [link](https://scottdejonge.com).

### List

#### Ordered list

1. Item 1
  1. Child item 1
2. Item 2

#### Unordered list

- Item 1
  - Child item 1
- Item 2
```