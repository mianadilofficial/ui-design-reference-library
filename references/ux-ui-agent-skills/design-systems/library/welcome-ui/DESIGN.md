---
version: alpha
name: Welcome to the Jungle
category: "Design Systems"
description: "Welcome to the Jungle's homepage runs on its own Welcome UI system: a saturated #ffcd00 yellow hero canvas with black ink, a #f6f3ef warm page body, 48px weight-900 headlines in the custom welcome-font at -2% tracking, Work Sans 16px body and 8px-radius buttons 42px tall."
colors:
  canvas: "#ffcd00"
  page-body: "#f6f3ef"
  page-largest: "#ffffff"
  ink: "#000000"
  primary: "#ffcd00"
  on-primary: "#000000"
  surface-soft: "#fbf9f7"
  surface-notice: "#fff8d9"
  ink-soft: "#1e1c1a"
  ink-deep-brown: "#423500"
  primary-hover: "#e5b800"
typography:
  display:
    fontFamily: welcome-font, sans-serif
    fontSize: 48px
    fontWeight: 900
    lineHeight: 57.6px
    letterSpacing: "-2%"
  display-mobile:
    fontFamily: welcome-font, sans-serif
    fontSize: 32px
    fontWeight: 900
    lineHeight: 38.4px
    letterSpacing: "-2%"
  subheading:
    fontFamily: welcome-font, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  body:
    fontFamily: "\"Work Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Work Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.2px
  link:
    fontFamily: welcome-font, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 21.6px
    letterSpacing: "-2%"
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 42px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 42px
  link:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    borderColor: "{colors.page-body}"
    boxShadow: rgba(0, 0, 0, 0.04) 0px 1px 2px 0px
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.page-body}"
    boxShadow: rgba(0, 0, 0, 0.04) 0px 1px 2px 0px
  footer:
    textColor: "{colors.page-largest}"
    padding: 96px 0px 32px
---

## Overview

Welcome to the Jungle is a job-search and employer-branding platform, and the captured English homepage is built to feel optimistic and human. The top of the page is a flat, saturated yellow field. A white rounded header bar floats on it with the stamp-like logo (a circular mark and the stacked wordmark "Welcome to the Jungle"), outlined pill-ish buttons (Find a job, Explore companies, Resources), a recruiter button, a black "Sign in" and a US region selector. Beneath it sits a pale yellow notice card, "There's something new here!", with a yellow "Learn more" button and a close icon.

The hero headline, "Stop looking for any job. Find where you belong.", is set in a very heavy display face over the yellow. A one-line subhead, "Match with your next dream job in HR.", highlights the final word in a small yellow tag. Two buttons follow: a black "Find that job" and a white "Explore companies". On the right, three slightly rotated cards overlap like a fan: a benefits list, a "Meet Louis, VP Product" portrait card with a dark caption plate, and an office-location map card.

Below, the ground switches to a warm off-white. "Finally, a job search that works for you." introduces rotated paper-like cards on colored plates (lavender, yellow) showing product UI: a job card with tags and Save/Skip buttons, a profile with recruiter requests. Headline words are highlighted with marker-style yellow or lavender blocks ("the right role?", "came to you?"). Cards have faint grid-paper backgrounds. The voice is conversational and direct: "Tell us what you want, and matching will pick jobs that suit you." Imagery is real people photographed warmly and cropped into the cards, plus small brand-logo tiles.

## Colors

`canvas` #ffcd00 is the yellow that fills the header area and hero, and it is also `primary`, the fill of the "Learn more" button, with text `on-primary` #000000 and hover `primary-hover` #e5b800. `page-body` #f6f3ef is the warm off-white page background below the hero, `page-largest` #ffffff the white of the header bar and cards, `surface-soft` #fbf9f7 a slightly warmer card tone and `surface-notice` #fff8d9 the pale yellow of the notice card.

`ink` is #000000, used for headings and most text by character count. `ink-soft` #1e1c1a is a warm near-black for secondary text, and `ink-deep-brown` #423500 is a dark olive-brown measured as hover and on-yellow text in the component variables. Both secondary neutrals are warm, not blue-gray.

The live page's root variables include ramps such as `--color-yellow-50` (#e5b800, which equals `primary-hover`), `--color-yellow-70` (#846a01), orange, blue, pink, violet and teal families, and semantic variables like `--color-background-information-subtle` and `--color-border-neutral-secondary` (#212121). Of these, only the yellow, black, white and warm neutrals above are used in the core tokens.

## Typography

Two families are loaded: `welcome-font` (weights 500, 700, 900) for headlines and links, and Work Sans (400, 500, 600, 700) for body text and buttons. The Welcome to the Jungle article at https://www.welcometothejungle.com/en-GB/articles/new-welcome-font states that Welcome Font is a custom typeface created with the French studio Violaine & Jeremy to express the brand's identity across web, print, video and events; it says nothing about weights, so the weights here come from the page measurement alone. An Axeptio consent-tool font set also loads on the page, which is a third-party widget and not brand typography.

Measured: `display` is welcome-font 48px at weight 900 with 57.6px line height and -2% letter spacing; `display-mobile` is 32px at 900 with 38.4px line height. `subheading` is welcome-font 14px at 500 with 21px line height. `link` is welcome-font 18px at 700 with -2% tracking and 21.6px line height. `body` is Work Sans 16px at 400 with 24px line height, and `button` is Work Sans 16px at 600 with 19.2px line height.

Font substitutes: welcome-font is proprietary to the brand; if it cannot load, the declared fallback is generic sans-serif, which will lose the very heavy weight-900 character. Work Sans is a freely available family.

## Layout

The header is a rounded white container inset from the viewport edges. Hero copy starts at the left margin and the fan of cards occupies the right half. Below, content is centered in a narrower column, with offset staggered cards that overlap their colored plates. Section padding is generous, with the footer using 96px top and 32px bottom padding. Measured spacing values are 1, 2, 4, 8, 12, 16, 24, 32, 48 and 60px. The system's breakpoint variables include `--breakpoint-xxl` at 1440px.

## Elevation & Depth

Depth is playful rather than technical. Cards are slightly rotated and overlap one another, creating a tactile stacked-paper effect. The measured shadow is very soft, rgba(0, 0, 0, 0.04) 0px 1px 2px 0px, on cards and navigation links; on hover those links gain a 0px 4px 6px shadow at the same 4 percent opacity, together with a darker border. Borders (the warm `page-body` tone, and a gray measured on header buttons) carry most of the separation, and flat color plates behind the product cards create layering.

## Shapes

Radii are small and friendly: `xs` 2px, `sm` 4px, `md` 8px, `lg` 12px, `xl` 16px. Buttons are `md` 8px, cards are `lg` 12px, and the larger plates and the header container use the bigger values. Tags highlighting words are rectangular with slight rounding. The logo mark is a circle. Nothing in the measured set is a full pill.

## Components

**button-primary**: yellow #ffcd00 fill, black 16px Work Sans 600 text, 8px radius, 42px height, 16px horizontal padding, hover #e5b800. **button-secondary**: black fill, white text, same size and radius (the "Find that job" button). Header navigation buttons are white with a gray border (#dedede measured on the "Find a job" link) and black text, hovering to a darker border and a soft shadow. **link** is a white 8px-radius button-like element with welcome-font 18px 700 type. **card** is white, 12px radius, with the soft shadow and warm border. **nav** is the white header bar and **nav-link** a black Work Sans item. **footer** has white text with 96px top padding.

## Design System Architecture

Welcome to the Jungle publishes Welcome UI at https://welcome-ui.com (repository https://github.com/WTTJ/welcome-ui, npm package `welcome-ui`, MIT license). The site calls it a customizable design system library built with React, TypeScript, Tailwind CSS and Ariakit, with 50+ components, design tokens and a theme system; the repository README also lists xstyled. The dsUrl is real and used by the live page: the captured root variables are component-scoped tokens that match its component list, such as `--button-*`, `--tag-*`, `--pagination-*`, `--stepper-*`, `--tab-*`, `--card-*`, `--toggle-*` and `--avatar-*`, alongside global `--color-*`, `--font-*` and `--breakpoint-*` variables.

The page's hero yellow, black ink and radii in this file are measured on the homepage, not copied from the library docs; the design-tokens documentation page that was opened did not list color or type values.

## Do's and Don'ts

Do fill the top of the page with the full yellow and keep ink pure black. Do use welcome-font at weight 900 with -2% tracking for headlines and Work Sans for body. Do use 8px radii on buttons and 12px on cards. Do highlight one phrase per headline with a marker block. Do use black for the strongest action and yellow for the friendly one.

Don't use the browser default link colors (#0000ee, #551a8b). Don't add heavy shadows; the measured shadow is 4 percent black. Don't make buttons fully round. Don't set long text in welcome-font; it is for headlines and links. Don't put yellow text on white.

## Responsive Behavior

The measured h1 shrinks from 48px with 57.6px line height at desktop to 32px with 38.4px line height at 390px. The system exposes a `--breakpoint-xxl` variable of 1440px, and its library documentation describes a mobile-first approach. Other mobile layout details were not measured.

## Iteration Guide

1. Start with a #ffcd00 hero and a white rounded header on top of it.
2. Headlines: welcome-font 48px, weight 900, -2% tracking.
3. Body and buttons: Work Sans 16px; buttons 42px high, 8px radius.
4. Use `page-body` #f6f3ef beneath the hero and stack slightly rotated white cards on colored plates.
5. Highlight key words with marker blocks.
6. Keep shadows to the 4 percent soft style.
