---
layout: default
date: 2021-03-12
tags: writing
title: AEIOU
description: A series of simple steps to follow that can assist in the delivery of a robust user experience
---

User interfaces require attentive thought to ensure an intuitive and simple user experience, like [Maslow’s Hierarchy of Needs](https://en.wikipedia.org/wiki/Maslow%27s_hierarchy_of_needs) interfaces also have needs. Some practical top-level principles that can assist are:

1. Accessible: the interface is interpreted by all technologies
2. Efficient: the interface is quick and simple to operate
3. Inclusive: the interface respects diversity
4. Obvious: the interface minimises cognitive load
5. Universal: the interface is familiar

## Accessible

An interface must be interpreted by the technologies of the people who view it. The principles of an accessible interface are outlined in the [Web Content Accessibility Guidelines (WCAG)](https://www.w3.org/WAI/standards-guidelines/wcag/), these principles are documented as:

- [Perceivable](https://www.w3.org/TR/WCAG21/#perceivable): Information and user interface components must be presentable to users in ways they can perceive.
- [Operable](https://www.w3.org/TR/WCAG21/#operable): User interface components and navigation must be operable.
- [Understandable](https://www.w3.org/TR/WCAG21/#understandable): Information and the operation of user interface must be understandable.
- [Robust](https://www.w3.org/TR/WCAG21/#robust): Content must be robust enough that it can be interpreted by by a wide variety of user agents, including assistive technologies.

An accessible interface ensures that regardless of the technology that a person uses to view it, the interface will respond appropriately.

Providing an accessible interface can be demonstrated when asking a person for their gender within a form.

For example, implementing the form control without providing the necessary context

```html
<select required="required">
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
```

{% codepen "https://codepen.io/kevingimbel/pen/WNRLEwM" %}

Extending the above with a [`<label>`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label) ensures that people can understand the context in which the form control is situated.

```html
<label for="gender">Gender</label>
<select id="gender" required="required">
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
```

{% codepen "https://codepen.io/kevingimbel/pen/VwPqzje" %}

This is sufficient enough to satify the criteria of the [Web Content Accessibility Guidelines (WCAG)](https://www.w3.org/WAI/standards-guidelines/wcag/):

- [1.3.1: Info and Relationships](https://www.w3.org/WAI/WCAG21/Understanding/info-and-relationships.html)
- [3.3.2: Labels or Instructions](https://www.w3.org/WAI/WCAG21/Understanding/labels-or-instructions.html)

So when validated by assistive technologies and accessibility tooling it should pass. However, there is more to an interface than satisfying accessibility criteria.

## Efficient

Providing an accessible interface is the first step, but an accessible interface does not ensure an efficient and desirable user experience.

Extending the above example, there are options to improve how a person enters the content into the form field.

### Remove entirely

The first question to ask is "Do you require this?". Is capturing a persons gender required? The easiest and simplest solution is to remove elements in order to provide a more efficient experience.

### Make optional

If asking for a persons gender is beneficial, but not required, then make it optional. Provide people with the control of their information.

```diff
  <label for="gender">Gender</label>
- <select id="gender" required="required">
+ <select id="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
```

### Use appropriate controls

If gender is absolutely required, then the best solution is to make the entry of that information as simple as possible.

Leveraging the [`autocomplete` HTML attribute](https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocomplete) could populate required information on a form field.

```html
<label for="gender">Gender</label>
<select id="gender" autocomplete="sex" required="required">
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
```

However, the information provided by a browser or device might not align with what is expected and this cannot be relied on entirely.

Using the appropriate element which coincides with the field information being captured minimises effort. In this case the appropriate control to use is a [`<fieldset>`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset) element.

```html
<fieldset>
  <legend>Gender</legend>
  <input id="male" name="gender" required="required" type="radio" value="male">
  <label for="male">Male</label>
  <input id="female" name="gender" required="required" type="radio" value="female">
  <label for="female">Female</label>
</fieldset>
```

{% codepen "https://codepen.io/kevingimbel/pen/qBRLXaB" %}

Use of `<input type="radio">` allows the options the be brought to the surface and means that a single press interaction is required to select an option.

A person viewing the form can immediately view the field and options available to them.

## Inclusive

What if the options provided to a person do not reflect their information? Explicit options can exclude from accurately representing the diversity of the people who use an interface.

An accessible and efficient interface does not necessarily mean an interface is inclusive.

### Remove entirely

If an interface control is not required, and can be harmful to people, then the first step could be to remove the control entirely. This would provide both an efficient and inclusive experience.

### Make optional

As above, if asking for a persons gender is beneficial, but not required, then make it optional and provide options that reflect the requirements of the people who are entering their information.

```diff
  <fieldset>
    <legend>Gender</legend>
-   <input id="male" name="gender" required="required" type="radio" value="male">
+   <input id="male" name="gender" type="radio" value="male">
    <label for="male">Male</label>
-   <input id="female" name="gender" required="required" type="radio" value="female">
+   <input id="female" name="gender" type="radio" value="female">
    <label for="female">Female</label>
+   <input id="non-binary" name="gender" type="radio" value="non-binary">
+   <label for="non-binary">Non-binary</label>
  </fieldset>
```

### Allow to decline

An alternative to an optional field is to allow people to decline from inputting their information.

```html
<fieldset>
  <legend>Gender</legend>
  <input id="male" name="gender" type="radio" value="male">
  <label for="male">Male</label>
  <input id="female" name="gender" type="radio" value="female">
  <label for="female">Female</label>
  <input id="non-binary" name="gender" type="radio" value="non-binary">
  <label for="non-binary">Non-binary</label>
  <input id="decline" name="gender" type="radio" value="decline">
  <label for="decline">Rather not say</label>
</fieldset>
```

{% codepen "https://codepen.io/kevingimbel/pen/yLgGoax" %}

### Allow flexibility

Provide people with the flexibility to enter the relevant information they require.

```html
<fieldset>
  <legend>Gender</legend>
  <input id="male" name="gender" type="radio" value="male">
  <label for="male">Male</label>
  <input id="female" name="gender" type="radio" value="female">
  <label for="female">Female</label>
  <input id="non-binary" name="gender" type="radio" value="non-binary">
  <label for="non-binary">Non-binary</label>
  <input id="decline" name="gender" type="radio" value="decline">
  <label for="decline">Rather not say</label>
  <input id="other" name="gender" type="radio" value="other">
  <label for="other">Other</label>
</fieldset>
<label for="gender-custom">Your gender</label>
<input id="gender-custom" name="gender-custom" type="text">
```

{% codepen "https://codepen.io/kevingimbel/pen/MWJZvjP" %}

An inclusive interface reflects the diversity of the people who use it.

## Obvious

How do people find the information that is relevant? In most cases [Obvious Always Wins](https://www.lukew.com/ff/entry.asp?1945).

Once an interface is accessible, efficient, and inclusive it needs to be obvious.

### Discoverable

The discoverability of an interface can differ depending on context. Extending the above example, it may be beneficial to isolate this question when initially presented to also provide relevant information and context to the usage of gender. 

### Grouping

In other instances it may be more obvious to include alongside other personal information fields, for example, within the profile or account settings.

### Surfacing

Placing information on the surface in a logical order ensures t

The discoverability of content can be influenced by learned behavior, previous patterns, or by interface cues which provide the necessary content.

## Universal

