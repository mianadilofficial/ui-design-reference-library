---
version: alpha
name: Huneety
category: "Thai Brands"
description: "Thai career platform for interns and young graduates (Huneety, Thailand at Work): turquoise #50ccc0 accents, pastel mint, cream and cyan cards, Noto Sans Thai at 16px with 900-weight 48px display, 4px buttons and 8px cards, grey #737373 footer."
colors:
  canvas: "#ffffff"
  ink: "#374151"
  primary: "#50ccc0"
  on-primary: "#ffffff"
  primary-translucent: "#50ccc0b3"
  surface-teal-tint: "#50ccc066"
  button-grey: "#a3a3a3"
  surface-footer: "#737373"
  surface-grey: "#e5e5e5"
  card-bg: "#ffebc2"
  card-mint: "#dfffd9"
  card-cyan: "#d9fcf9"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 48px
    fontWeight: 900
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 30px
    fontWeight: 900
    lineHeight: 36px
  heading:
    fontFamily: "\"Noto Sans Thai\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  subheading:
    fontFamily: "\"Noto Sans Thai\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: "\"Noto Sans Thai\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Noto Sans Thai\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 600
    lineHeight: 32px
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.button-grey}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary-translucent}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 40px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 4px 24px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 0px 0px 20px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    padding: 40px 32px 14px
---

## Overview

Huneety (https://www.huneety.com, operated by Huneety Co. Ltd. per the footer) is a Thai career site aimed at interns and young graduates; the page title is "Huneety - Career opportunities for interns and young graduates" and the page is offered in English, Thai (ภาษาไทย) and Bahasa Indonesia. The home page's headline is "Thailand at work", with the line "Your Career Starts Here / For interns and young graduates". The main navigation lists "Find a job", "Career center", "About us", "Partners" and "Free for employers", plus "Create profile" and "Sign in". The menu also includes career tools: Career explorer, Company explorer, How to get a job and a free "Resume checker".

The visual identity is playful and warm. A full-width gradient bar runs across the header from salmon-pink through yellow to turquoise, with the white wordmark on it; "Thailand at work" is set in the same gradient. Below, three pastel cards in cream (`#ffebc2`), pale cyan (`#d9fcf9`) and pale mint (`#dfffd9`) each carry a photograph with bold white-on-colour lettering ("YOUR INTERNSHIP, YOUR FUTURE", "NEW GRADUATE, NEW JOURNEY", "Thailand at work ACADEMY"), a title, a one-line description and a translucent turquoise button. A grey rounded call to action "Create your profile to be matched with the best jobs" follows, then four round coral icons (Manage my CV and applications, My career path recommendations, How to get a job, Talk to my advisor) and an "Employment News (10)" section on a turquoise tint with white article cards.

The voice is friendly and second-person: "Your Career Starts Here", "I want to receive job offers", "Already registered? I want to edit my profile". The page measured 5,782px tall at 1280px wide.

Content is organised around the job seeker's stage of life. The three audience cards split the offer into internships, young graduate jobs and an Academy with CV guidance and interview preparation, and the news section underneath publishes career guides (for example job descriptions and interview questions for engineering roles) as image-led article cards, each ending in a "Learn more" button.

## Colors

- **Turquoise `#50ccc0`** is the brand accent: it is the most frequent border color (13 occurrences) and the base of the translucent fills `#50ccc0b3` (button fills "Browse internships", "Browse graduate jobs", "Learn more") and `#50ccc066` (the largest measured background area, 2,193, the Employment News band). In the hover pass the button fill goes from rgba(80, 204, 192, 0.7) to rgba(80, 204, 192, 0.8) while the element's opacity goes to 0.75.
- **Canvas `#ffffff`** (1,522 area) plus translucent whites `#ffffffb3` (1,363) and `#ffffff80` (263) used for cards over tints.
- **Pastel cards:** `#ffebc2` (cream), `#d9fcf9` (cyan), `#dfffd9` (mint), each 158 area weight.
- **Greys:** `#737373` (833) is the footer; `#e5e5e5` (456) a light grey surface; `#a3a3a3` (53) is the fill of the two grey call-to-action links ("Already registered?", "I want to receive job offers") with white text.
- **Text:** `#374151` is the body color (4,067 characters), white `#ffffff` (1,658) on color and footer, `#a3a3a3` (89).
- A blue `#1970f0` (3) belongs to the floating chat control and is not a brand color. Gradient stops of the header are not available as measured tokens.

## Typography

One family: **Noto Sans Thai** (loaded at 400 in the font list), used in the stack `"Noto Sans Thai", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"`. All 5,835 measured characters are Noto Sans Thai.

Roles: display 48px / weight 900 / 48px ("Thailand at work"; 30px / 36px at the 390px mobile pass); heading 24px / 500 / 32px ("Employment News (10)"); subheading 20px / 600 / 28px (card titles such as "Internships"); body 16px / 400 / 24px; link 16px / 600 / 32px. By character count 16px is dominant (3,414), then 14px (1,276, footer and chips), 20px (926), 36px (106) and 48px (16). Weights seen: 400 (3,932), 600 (1,120), 500 (552), 700 (203) and 900 (28). Noto Sans Thai is a Google Fonts family and needs no substitute.

## Layout

At 1280px the page uses a centred container with three equal columns for the audience cards and four for the news cards. The header bar is full width. Section backgrounds change between white and the turquoise tint, with white cards carrying the content. Measured paddings are 20px (36 occurrences), 16px (27), 8px (21), 12px (19), 32px (9) and 40px (6); gaps are 12px (8), 24px (4) and 8px (2). Card padding is `0px 0px 20px` with the image flush to the top edge.

## Elevation & Depth

Depth is almost flat: the only recorded shadow is `rgba(0, 0, 0, 0.05) 0px 4px 10px 0px`. White cards sit on the tinted band and are separated by the color change and 8px corners. The header gradient and photographs supply the visual weight.

## Shapes

Radii are `4px` (33 occurrences, buttons), `8px` (21, cards), `8px 8px 0px 0px` (17, card images with square bottom corners), `100%` (2, round icon circles) and `9999px` (1, the pill-shaped "Create your profile" call to action). Buttons are 4px and slightly boxy, in contrast to the round icons.

## Components

- **Translucent turquoise button:** fill `#50ccc0b3`, white 16px text, 4px radius, `8px 16px` padding, 42px tall in the hover measurement, with an arrow glyph after the label.
- **Grey call-to-action link:** `#a3a3a3` fill, white text, 4px radius, 40px tall.
- **Outlined header button ("Create profile"):** transparent with a 1px solid white border, white 14px / 600 text, 4px radius.
- **Cards:** pastel fills `#ffebc2`, `#d9fcf9`, `#dfffd9`, 8px radius, image on top, title and copy below, a button at the bottom.
- **Navigation:** white or gradient bar with 16px links.
- **Footer:** `#737373`, white 14px text, padding `40px 32px 14px`; includes the company line "Huneety Co. Ltd. - Head office".
- The chat bubble at the right edge is third-party and is not documented.

## Design System Architecture

No public design system or brand-guideline page was found; the /brand, /press, /about and /design paths redirect to the English home page. The shipped CSS is Tailwind (the root defines `--tw-ring-color: rgb(59 130 246 / .5)`, `--tw-ring-offset-color: #fff` and the other `--tw-*` shadow variables) with the Tailwind default `ui-sans-serif` system stack behind Noto Sans Thai. Brand colors are applied as arbitrary values (`#50ccc0` at several alpha levels) rather than root variables.

## Do's and Don'ts

Do use the turquoise `#50ccc0` in translucent forms for buttons and tinted bands, with white text. Do give each audience card its own pastel (cream, cyan, mint). Do set the hero title in 900-weight Noto Sans Thai. Do keep buttons at 4px and cards at 8px.

Don't use the chat control's blue as a brand color. Don't add heavy shadows; the page records one 5% shadow. Don't put dark text on the translucent turquoise buttons; the measured text on them is white.

## Responsive Behavior

Measured at 390px: h1 30px / weight 900, h2 24px / 500, body 16px / 400 and the grey CTA 16px / 400 on `#a3a3a3`. The mobile navigation shows an "Open menu" control, a "Sign in" action and a language switcher. Column counts and breakpoints were not measured.

## Iteration Guide

1. Start from the frontmatter tokens; `primary` is the turquoise `#50ccc0` and the translucent button fill is `primary-translucent`.
2. Compose home sections from pastel image cards with 8px top-rounded images and 4px buttons.
3. Use `#50ccc066` bands behind white cards for content lists.
4. Set all text in Noto Sans Thai: 16px / 24px body, 900-weight display.
5. Not measured: hover on cards, dark mode, tablet breakpoints; check the live site.
