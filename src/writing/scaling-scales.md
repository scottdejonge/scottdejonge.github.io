---
layout: default
date: 2023-06-07
tags: writing
title: Scaling scales
description: How many scales can a design system scale if a design system can scale scales?
---

I was listening to the [Complementary podcast](https://podcasts.apple.com/us/podcast/complementary/id1671376839) episode on [Design Systems](https://podcasts.apple.com/us/podcast/06-design-systems/id1671376839?i=1000608091066) where Anthony and Katie discussed scales in design systems, why some design systems use 100 to 900. Beyond "other systems use it" and "I dunno I like it" I haven't thought in great depth how scales are used, in design systems or otherwise.

The 100 to 900 or "millennial" scale seemed to grow in popularity in early [Material Design](https://material.io/) color scale. Mentioned in the podcast episode is the ability to include extra values in the scale, for example, 50 as a value lighter than 100, or 825/850/875 as intermediate values between 800 and 900. It is a relatively generic and predictable scale that has application to color, spacing, typography etc.

As with everything, a scale's job depends on it's usage and context. It's less of an enforceable or unilateral standard, and more of a vibe, what makes sense to individuals and teams in different contexts. The millennial scale works well for dimensions and colors as it provides upper and lower boundaries, perceptible steps, and the ability to extend between major steps. However, some scales can benefit from restriction or using familiar terms to be more descriptive, for example duration may be expresses as "slow" and "fast". Fewer values can minimise variability in properties which don't necessarily benefit from it.

When it comes to defining scales, I feel like there are 3 general approaches:

1. Restrictive: fewer scale values such as "small", "medium", "large"
2. Prescriptive: wider scale values with clear upper and lower boundaries such as the millennial scale
3. Permissive: relatively open scale values, mostly defined by individual context rather than relationship to each other such as "padding-sidebar" etc.

The one constant with any implementation is that it will change. Values within a scale, or the scales themselves, will change. There a pros and cons to any approach, largely weighed by the impact of a value change, or the effort involved in replacing existing usage of a prior scale throughout a codebase or design tool. 

In [turretcss](https://turretcss.com/) I opted for a t-shirt (or Maccas/McDonald's) scale blended with millennial scale for color. The benefit of the t-shirt scale is that there is a restricted scale above and below the default "medium". The downside of the t-shirt scale is that there is a _restricted_ scale above and below the default "medium". What began as small/medium/large quickly grew into xxs to xxl with little room to move beyond adding more and more x's. Not necessarily a bad restriction, but notable as exceptions were difficult to implement.

Previously I've worked with a 10 to 90 scale. Like the millennial scale this provides opportunity to create intermediate scales between steps, unlike the millennial scale these are more likely to be confused with actual values. For example `font-size: 20`, is this `20px`? or 20 in a step of 10 to 90? On multiple occasions consumers of the scale used values that didn't exist as they assumed they mapped to a pixel value or would automatically be computed.

My personal bias is towards less restrictive scales, that follow consistent and obvious steps. I tend to be the "more is more" camp where flexibility (within reason) and intuitive values make it easier to work with, primarily for dimensions (like spacing or widths) which tend to have greater variability in application.

Often when working with smaller spaces, or lighter shades of colors (especially neutral backgrounds and borders), it's really handy to have greater flexibility. At large scales, such as max-widths, general sizes (like 640) are preferable to explicit numbers. What if the millennial scale could be extended to provide more granular values that could be consistent regardless of usage (spacing/font-size/width etc.). An idea is an incremental scale from 1 to 10, 10 to 100, 100 to 900:

| Token | Value (rem) | Value (px) |
| ----- | ----------- | ---------- |
| 1     | `0.0625rem` | `1px`      |
| 2     | `0.125rem`  | `2px`      |
| 3     | `0.25rem`   | `4px`      |
| 4     | `0.375rem`  | `6px`      |
| 5     | `0.5rem`    | `8px`      |
| 6     | `0.625rem`  | `10px`     |
| 7     | `0.75rem`   | `12px`     |
| 8     | `0.875rem`  | `14px`     |
| 9     | `0.9375rem` | `15px`     |
| 10    | `1rem`      | `16px`     |
| 15    | `1.5rem`    | `24px`     |
| 20    | `2rem`      | `32px`     |
| 25    | `2.5rem`    | `40px`     |
| 30    | `3rem`      | `48px`     |
| 35    | `3.5rem`    | `56px`     |
| 40    | `4rem`      | `64px`     |
| 45    | `4.5rem`    | `72px`     |
| 50    | `5rem`      | `80px`     |
| 55    | `5.5rem`    | `88px`     |
| 60    | `6rem`      | `96px`     |
| 65    | `6.5rem`    | `104px`    |
| 70    | `7rem`      | `112px`    |
| 75    | `7.5rem`    | `120px`    |
| 80    | `8rem`      | `128px`    |
| 85    | `8.5rem`    | `136px`    |
| 90    | `9rem`      | `144px`    |
| 95    | `9.5rem`    | `152px`    |
| 100   | `10rem`     | `160px`    |
| 150   | `15rem`     | `240px`    |
| 200   | `20rem`     | `320px`    |
| 250   | `25rem`     | `400px`    |
| 300   | `30rem`     | `480px`    |
| 350   | `35rem`     | `560px`    |
| 400   | `40rem`     | `640px`    |
| 450   | `45rem`     | `720px`    |
| 500   | `50rem`     | `800px`    |
| 550   | `55rem`     | `880px`    |
| 600   | `60rem`     | `960px`    |
| 650   | `65rem`     | `1040px`   |
| 700   | `70rem`     | `1120px`   |
| 750   | `75rem`     | `1200px`   |
| 800   | `80rem`     | `1280px`   |
| 850   | `85rem`     | `1360px`   |
| 900   | `90rem`     | `1440px`   |

This incremental scale aligns the `rem` value to the scale, it contains general border-width, spacing, and width values you would expect. It could also be extended for greater variables such as 

| Token | Value (rem) | Value (px) |
| ----- | ----------- | ---------- |
| ...   | ...         | ...        |
| 10    | `1rem`      | `16px`     |
| 12-5  | `1.25rem`   | `20px`     |
| 15    | `1.5rem`    | `24px`     |
| 17-5  | `1.75rem`   | `28px`     |
| 20    | `2rem`      | `32px`     |
| 22-5  | `2.25rem`   | `36px`     |
| 25    | `2.5rem`    | `40px`     |
| 27-5  | `2.75rem`   | `44px`     |
| 30    | `3rem`      | `48px`     |
| ...   | ...         | ...        |
