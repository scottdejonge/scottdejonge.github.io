---
layout: article
title: "Responsive typesetting on the web"
date: "2012-04-02 15:00:00 +1000"
author: scottdejonge
categories: []
color: "#DB1054"
background: "#FCF897"
---

This example should prove that through using simple <abbr title="Cascading Style Sheets">CSS</abbr>, and semantic <abbr title="Hypertext Text Markup Language">HTML</abbr>, along with effective typesetting design content can be visually appealing whilst also being natively accessible, responsive, and performant.

## <small>Chapter 1:</small> Problem space

In order to properly define the problem space we will set design limitations to ensure there are objective outcomes to the design process. These design limitations are as follows:

1.  _Less is more:_ the download payload for all styles, assets, and markup should be minised as much as possible.
2.  _Keep it simple:_ all styles should be defined using simple, modern, and understandable <abbr title="Cascading Style Sheets">CSS</abbr> properties, this means no opinionated development workflows such as Sass, Less etc.
3.  _Effecient design is good design:_ whilst we should minimise technical understanding, this should not interfere with reusable well defined code, therefore we will utlilise PostCSS, Autoprefixer and CSSNext to automate cross-browser compatiblity.
4.  _Legibility is key:_ we will use a well structured typeface ([<abbr title="Edward Tufte">ET</abbr> Book](https://edwardtufte.github.io/et-book/)) along with formatted <abbr title="Hypertext Text Markup Language">HTML</abbr> tags to emphasis content.
5.  _Easy reading:_ we will use a high contrast color palette (<abbr title="Web Content Accessibility Guidelines 2.0 AAA">WCAG 2.0 AAA</abbr>) and scaling vertical rythym to provide a clear visual heriarchy context.

* * *

## <small>Chapter 2:</small> Objectives

To better measure the success of typesetting design on the web we will set the objectives of this example as the following:

*   _Clarity:_ we will measure the clarity of the typographic design through automatic accessibility testing, ensuring culor contrast and <abbr title="Document Object Model">DOM</abbr> tree heriarchy pass <abbr title="Web Content Accessibility Guidelines 2.0 AAA">WCAG 2.0 AAA</abbr> guidelines
*   _Consistancy:_ we will ensure the consistant rendering of the design across browsers, mediums (screens and print), and devices.

* * *

## <small>Chapter 3:</small> Challenges

<q>Lets move away from the learnt habits</q> I thought to myself,

* * *

## <small>Chapter 4:</small> Fonts

<q>Lets move away from the learnt habits</q> I thought to myself,

* * *

## <small>Chapter X:</small> The cascade

Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.

> Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum.
> 
> <cite>John Doe</cite>

Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum.

* * *

## <small>Chapter X:</small>Scale

Font size scale.

<table border="1" cellpadding="5px" cellspacing="0">
  <thead>
    <tr>
      <th></th>
      <th>xs</th>
      <th>s-up</th>
      <th>l</th>
      <th>xl</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1em</th>
      <td>16pt</td>
      <td>20pt</td>
      <td>24pt</td>
      <td>28pt</td>
    </tr>
    <tr>
      <th>1.25em</th>
      <td>20pt</td>
      <td>25pt</td>
      <td>30pt</td>
      <td>35pt</td>
    </tr>
    <tr>
      <th>1.5em</th>
      <td>24pt</td>
      <td>30pt</td>
      <td>36pt</td>
      <td>42pt</td>
    </tr>
    <tr>
      <th>1.75em</th>
      <td>28pt</td>
      <td>35pt</td>
      <td>42pt</td>
      <td>49pt</td>
    </tr>
    <tr>
      <th>2em</th>
      <td>32pt</td>
      <td>40pt</td>
      <td>48pt</td>
      <td>56pt</td>
    </tr>
    <tr>
      <th>2.25em</th>
      <td>36pt</td>
      <td>45pt</td>
      <td>52pt</td>
      <td>63pt</td>
    </tr>
    <tr>
      <th>2.5em</th>
      <td>40pt</td>
      <td>50pt</td>
      <td>58pt</td>
      <td>70pt</td>
    </tr>
    <tr>
      <th>2.75em</th>
      <td>44pt</td>
      <td>55pt</td>
      <td>64pt</td>
      <td>77pt</td>
    </tr>
    <tr>
      <th>3em</th>
      <td>48pt</td>
      <td>60pt</td>
      <td>70pt</td>
      <td>84pt</td>
    </tr>
    <tr>
      <th>3.25em</th>
      <td>52pt</td>
      <td>65pt</td>
      <td>76pt</td>
      <td>91pt</td>
    </tr>
    <tr>
      <th>3.5em</th>
      <td>56pt</td>
      <td>70pt</td>
      <td>82pt</td>
      <td>98pt</td>
    </tr>
    <tr>
      <th>3.75em</th>
      <td>60pt</td>
      <td>75pt</td>
      <td>88pt</td>
      <td>105pt</td>
    </tr>
    <tr>
      <th>4em</th>
      <td>64pt</td>
      <td>80pt</td>
      <td>92pt</td>
      <td>112pt</td>
    </tr>
    <tr>
      <th>4.25em</th>
      <td>68pt</td>
      <td>85pt</td>
      <td>98pt</td>
      <td>119pt</td>
    </tr>
    <tr>
      <th>4.5em</th>
      <td>72pt</td>
      <td>90pt</td>
      <td>104pt</td>
      <td>126pt</td>
    </tr>
    <tr>
      <th>4.75em</th>
      <td>76pt</td>
      <td>95pt</td>
      <td>110pt</td>
      <td>133pt</td>
    </tr>
    <tr>
      <th>5em</th>
      <td>80pt</td>
      <td>100pt</td>
      <td>116pt</td>
      <td>140pt</td>
    </tr>
    <tr>
      <th>10em</th>
      <td>160pt</td>
      <td>200pt</td>
      <td>240pt</td>
      <td>280pt</td>
    </tr>
    <tr>
      <th>20em</th>
      <td>320pt</td>
      <td>400pt</td>
      <td>480pt</td>
      <td>650pt</td>
    </tr>
    <tr>
      <th>30em</th>
      <td>480pt</td>
      <td>600pt</td>
      <td>720pt</td>
      <td>840pt</td>
    </tr>
    <tr>
      <th>40em</th>
      <td>640pt</td>
      <td>800pt</td>
      <td>960pt</td>
      <td>1120pt</td>
    </tr>
  </tbody>
  </table>

* * *

## <small>Chapter X:</small>Markup & styles

Predicatable and reusable. Use the correct markup.

### Headings

# Heading 1 <small>Heading 1 small</small>

## Heading 2 <small>Heading 2 small</small>

### Heading 3 <small>Heading 3 small</small>

#### Heading 4 <small>Heading 4 small</small>

##### Heading 5 <small>Heading 5 small</small>

###### Heading 6 <small>Heading 6 small</small>

### Paragraph

An example of paragraph content that is sizes at 1em of the root font size of the document.

### Link

[link](#)

### Strong

**strong**

### Emphasis

_emphasis_

### Abbreviation

<abbr title="In case you missed it">ICYMI</abbr>

### Small

<small>small</small>

### Horizontal Rule

* * *

### Quote

<q>A quote</q>

### Blockquote

> A blockquote

### Cite

<cite>A citation</cite>

### List

*   Unordered list

1.  Ordered List

### Definition List

<dl>

<dt>Definition term</dt>

<dd>Definition</dd>

</dl>

### Code

`code`

### Pre

```
Hello World
```

### Kbd

<kbd>ctrl</kbd> + <kbd>s</kbd>

### Mark

<mark>mark</mark>