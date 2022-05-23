---
layout: default
tags: case-studies
title: Login
description: Designing and building a modern, performant, efficient, and accessible login page.
---

![Login mobile](/public/case-studies/login/mobile.png)

## Overview

Accessibility is crucial for an NDIS registered online platform. The login page is the front-door to a web application, and sets expectations for the rest of the user experience. Delivering an accessible, and efficient login page requires reducing friction and complexity. The primary method to minimise effort is to reduce user input.

### Objective

Improve login user experience by reducing page impressions and time spent on page.

- **Impressions:** reduce session expiries, resolve session time and authentication storage.
- **Time spent:** improve page performance, user experience, and accessibility.
  - performance: delivered by moving to new frontend tooling
  - user experience: reduce user input *(focus of design approach)*
  - accessibility: resolve WCAG compliance issues *(focus of design approach)*

## Research

### Competitor analysis

What do users expect from a login page? What are common patterns or behaviours? What technologies are being used?

A competitor analysis of login pages for Google, Twitter, Facebook, LinkedIn etc. provides great insight to these questions.

<video controls poster="/public/case-studies/login/competitors.png" src="/public/case-studies/login/competitors.mp4"></video>

What they largely have in common is:

- Minimal visual presentation
- Simple login form (email/password)
- Forgot password link
- Register an account call-to-action

### Accessibility

To improve the accessibility of the login page it's important to identify the existing accessibility issues using the [Web Content Accessibility Guidelines (WCAG) 2.1](https://www.w3.org/TR/WCAG21/).

![Login old large](/public/case-studies/login/old.png)

An audit of the previous login page identified the following compliance issues:

### Audit

#### [1.4.1: Use of Color](https://www.w3.org/WAI/WCAG21/Understanding/use-of-color.html)

When form field validation, or form submission fails the error is presented visually to user by adding a red border color fields. This is not a sufficient enough visual indicator for color-blind users that an error has occurred.

**Proposed solution:** include multiple visual cues on error, color, shape, and copy. When an error occurs present users with a meaningful error, in an identifiable color with an identifiable shape e.g. icon.

#### [2.1.1: Keyboard](https://www.w3.org/WAI/WCAG21/Understanding/keyboard.html)

Navigating to the form and email field requires significant effort to bypass template content such as logo, navigation etc. resulting in significant noise and effort for keyboard and screen-reader users.

**Proposed solution:** move user's focus directly to email form field, remove excess template content to reduce noise.

#### [3.3.2: Labels or Instructions](https://www.w3.org/WAI/WCAG21/Understanding/labels-or-instructions.html)

Individual form fields do no contain persistent visual labels. When content is added it's no longer clear what the fields are requesting.

**Proposed solution:** include visual labels with form fields that persist when content is added.

#### [3.3.3: Error Suggestion](https://www.w3.org/WAI/WCAG21/Understanding/error-suggestion.html)

Error messages are not announced to screen-reader users. When an error occurs the form does not inform non-visual users of the error.

**Proposed solution:** announce error messages to screen-reader users.

### User testing

To understand accessibility beyond guidelines it's important to test interfaces with people with disability. How accessible technologies like screen-readers (VoiceOver, JAWS, NVDA etc.) interpret an interface can differ greatly depending on device, browser, version, and individual configuration settings.

Below is a snippet from an accessibility testing session, where a non-sighted user navigates through the previous iteration of the login page using JAWS screen-reader with a Chrome browser on a Windows laptop.

<video controls src="/public/case-studies/login/accessibility.mp4"></video>

> "so normally it should just open up to the box"
## Purpose

In order to successfully execute a new login page it's critical to define it's fundamental purpose. The purpose identifies the job the login page has to do and can be used as a benchmark for creating user stories.

What job does the login page have?

> Authenticate users on the platform with minimal effort.

Ideally the login page should be rarely encountered, only when signing in on a new device. When the login page is required we want to minimise user input and error. This can be achieved leveraging existing patterns and attributes to:

1. **Provide structure and labels:** all content is labelled and understandable by all devices/browsers/technologies.
2. **Remove complexity:** only contain required and meaningful content.
3. **Minimise input:** autofill form fields, present correct form controls/keyboards, leverage alternative input modes (FaceID etc.)
4. **Disclose errors:** present meaningful error messages both visually and audibly.

### User stories

- As a *password manager user* I want to *automatically fill out email and password* so I can *login automatically*
- As a *screen-reader user* I want to *focus the email input field* so I can *navigate to login successfully*
- As a *mobile user* I want to *use the email keyboard* so I can *enter my email address*
- As a *logged out user* I want to be able to *view the entered password* so I can *confirm it's the correct password*
- As a *returning user* I want to be able to *reset my password* so I can *login to the platform*
- As a *new user* I want to be able to *register an account* so I can *login to the platform*

## Minimal viable product

To understand how different browsers, devices, and screen-readers interact with login form fields a minimal viable product that only included the raw HTML was created to evaluate success against user experience and accessibility requirements.

```html
<main aria-labelledby="page-title">
  <h1 id="page-title">Login</h1>
  <form>
    <label for="email">Email</label>
    <input id="email" autofocus autocapitalize="off" required type="email" />
    <label for="password">Password</label>
    <input id="password" required type="password" />
    <a href="/reset">Forgot password</a>
    <button>Login</button>
  </form>
  <p>New to Hireup? <a href="/registration">Sign up for an account</a></p>
</main>
```

1. `aria-labelledby="page-title"`: label main content with heading level 1.
2. `autofocus`: move the user focus directly to the email form field.
3. `autocapitalize="off"`: remove mobile keyboard auto-casing to prefer lowercase email addresses.
4. `type="email"`: include email keyboard on mobile/touch devices, autocomplete from browser/device/password manager.
5. `type="password"`: autocomplete from browser/device/password manager.
6. `<a href="/reset">`: link to reset password form before submit button for logical content order in screen-readers.
7. `<a href="/registration">`: promote link to register.

### Composed with existing components

Taking a minimal "using what you have to achieve what you want to achieve" approach to compose a primitive login view within Storybook.

![Storybook](/public/case-studies/login/storybook.png)

This allowed rapid prototyping in the browser in a local and hosted environments to experiment with different browser and device combinations.

## Iterations

<video controls poster="/public/case-studies/login/large.png" src="/public/case-studies/login/iterations.mp4"></video>

After browser and device compatibility testing, the focus moved to the overall login page interface and experience. Having high confidence in the technical approach, there is a need to ensure that each function of the page is visually distinct including:

1. Login form
2. Register call-to-action
3. Footer help and legal navigation

Iterations of the login page design were presented to the design team for critique and feedback. Each iteration aiming to solve feedback and refine the user interface.

## Ship it!

Once content with both technical approach and visual design the login page was implemented to provide user authorization and deployed on all environments. Before resolving the login route to the new page assets for all users, the page was initially soft-launched for all internal staff.

With (nearly) all known combinations of devices, operating systems, browsers, password managers, and screen-readers covered the login page was sucessfully rolled out to 100% of all users on the platform!

The updated login page resulted in a significant decrease in customer support tickets directed to the product team, addressing most common customer support requests.

## One more thing

To provide a consistent and accessible experience the forgot password user flow was implemented using efficiencies found in the login page components.

<video controls poster="/public/case-studies/login/reset.png" src="/public/case-studies/login/reset.mp4"></video>

## Future

With the login page redesigned and re-platformed into the latest codebase it can now be easily iterated on to implement future possible outcomes such as OAuth and single sign on, and multiple account switching interfaces.
