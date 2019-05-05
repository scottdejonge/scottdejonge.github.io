---
layout: default
title: "Non-visual Web Design"
date: "2019-05-05 14:18:00 +1000"
---

There is are layers to web design before the selection of interface elements (such as colours, fonts, and icons) which benefit users, these are interfaces that you may not be considering.

For the purposes of this article we are going to assume definitions of design as *human-centric problem solving encompassing function as well as aesthetic* and the web as *an interface of interconnected documents of rich content*.

Given these definitions of design and the web, the traditional concept of “web design” changes. Web design is more than the “homepage-first” creative studio/web shop/agency approach. Web design includes considerations for content, performance, meaning, and aesthetics. These are, at a top level, the makeup of a web page document, each a requirement, but in the case of performance and meaning, often overlooked by web designers, rather preferencing the aesthetic.

## Hierarchy of requirements

The hierarchy of requirements outlines, in order, how web designers should prioritise their focus, these are:

1. **Content**: the primary reason for users to visit a web page.
2. **Performance**: the limiter to the duration of time it take for content to be understandable.
3. **Meaning**: the descriptive formatting of content.
4. **Aesthetics**: the visual, including the style and positioning of content.

### The anatomy of web content

Web content is more than just copy and images. Web content, much like a well formatted document, needs structure and meaning to be understandable by both human and non-human readers. Taking a critical approach to better cater content to the user is the realm of the web designer.

> “Critical content” should be evaluated based on the requirements of the end user

Web content should not be predetermined by a visual template, but rather be guided by what outcomes are required by a user. This “critical content” should be evaluated based on the requirements of the end user, and be specific to the purpose of the website being designed. For example, the end user’s requirements for a local business’ website include:

1. Clear and descriptive overview of the services/products offered.
2. Listing of products/services available (with prices if needed).
3. Contact information including multiple contact methods.
4. Location information such as a street address.
5. Opening hours.

Given the requirements in this example, this local business could provide the majority of critical content to their customers within the search results page of Google, bypassing the need for a website altogether. This however, may not be optimal for the business, which still needs to display listings of services/products, not easily displayed within Google’s business listing.

Therefore, a hybrid approach would benefit both the end user, and the business. Provide critical content to Google’s business listings, reenforced on the business’ website along with services/products listings, and any other narrative content (such as the business history, team members etc.).

#### A homage to the homepage

The focus of the homepage in web design makes misguided assumptions on user behaviour.

> Common user behaviour indicates users find websites through search not by typing in the correct URL for your website homepage.[^dto-homepage]

Often the homepage is viewed by both designers and their clientele as the first location users will see, the root source of all other content of the website. This is contrary to how the user navigates to content, ignoring the abstraction of website content within search results, where the primary navigation action of the user takes place.

> ”we should spend a lot more time concerned with how our content and design decisions show up in search results than we should spend finessing our homepage” [^dto-google]

Your homepage is not your front door [^dto-homepage], exploring options to abstract content to the search result page enables easier navigation to more descriptive content.

### The importance of performance

Once the user has made the decision to click through from a search results page the biggest barrier to entry is the performance of the opening webpage.

- 47% of consumers expect a web page to load in 2 seconds or less.[^kissmetrics]
- 40% of people abandon a website that takes more than 3 seconds to load.[^kissmetrics]
- A 1 second delay in page response can result in a 7% reduction in conversions.[^kissmetrics]

The performance of a website is costing you and your user money. Processing and pushing assets down the pipe to the end user is consuming server resources. The end user viewing a website is inevitably paying for an internet connection, whether it be for home or mobile data, fixed or flexible plans.

Not all internet connections are alike, no assumptions can be made about how, where and on what device users will digest website content. Using analytics as insight is the best method to inform how to prioritise device testing.

### Prescribing meaning

The meaning of a web page document encompasses how the document is interpreted by human needs (e.g. accessibility and/or internationalisation), and how non-human interpret the document (e.g. structured data[^schema]). 

The web is an accessible medium by default. Publishing content using semantic markup is the simplest way to ensure that the content is available for screen-reading technologies as well as automated content crawling for the purpose of populating search engine data.

Semantics determines the logical structure of headings, proper text formatting (e.g. `<blockquote>`, `<cite>`, and other descriptive HTML tags) and correct use of descriptive annotations (e.g. alt tags on images).

Adding meaning to content within the web page document benefits not only users with accessibility requirements, but too, extends the functionality of content for benefit of all users.

### Aesthetics

The role of aesthetics in web design is to reinforce meaning through hierarchy of placement, proximity and weight. Placement and proximity reinforce relationships between content. Weight is assigned through the colour or sizing of elements to communicate primary, secondary and tertiary content or actions.

Effective visual web design enhances content -and it’s meaning- for it’s intention to be immediately clear to the user.

The aesthetics of a web page should not exclude any users, providing enough legibility through text size and contrast. Alignment to the Web Content Accessibility Guidelines [^WCAG] is the simplest way to ensure inclusion of all users in web page content publishing.

### Content is critical, the aesthetic is optional

Content on the web is flexible, and it’s rendering be customised to a user’s requirements. This is not exclusive to accessibility technologies, but present in popular browsers, this is evident in Safari’s Reader Mode[^safari] remove the web page’s aesthetic entirely to provide users with a simplified delivery of content.

Some users block the visual interface
Some users do not use the visual interface

## Takeaway

The purpose of this article is to shine a light onto the work that goes on behind the scenes of a webpage to benefit users. It is not the intention to aggravate any -albeit fabricated- divide between web designers and developers.

[^dto-google]: [GOV.AU’s content model explained](https://www.dto.gov.au/blog/gov-au-content-model-explained/)
[^dto-homepage]: [Your homepage is not your front door](https://www.dto.gov.au/blog/your-homepage-is-not-your-front-door/)
[^kissmetrics]: [Kissmetrics](https://blog.kissmetrics.com/loading-time/)
[^schema]: [Schema.org](http://schema.org/)
[^WCAG]: [Web Content Accessibility Guidelines (WCAG) 2.0](http://www.w3.org/TR/WCAG20/)
[^safari]: [Apple Safari Reader](http://apple.com/safari/)