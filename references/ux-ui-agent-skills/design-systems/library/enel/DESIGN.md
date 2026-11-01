---
version: alpha
name: Enel Group
category: "Energy & Climate"
description: "Enel Group corporate home page: white canvas, ink #0e141a text, Roobert bold 58px/68px headlines and 22px body, magenta #d3135a links, ocean #0047cc secondary, snow #eff2f7 sections and square-cornered components with round carousel arrows."
colors:
  canvas: "#ffffff"
  page-largest: "#eff2f7"
  ink: "#0e141a"
  primary: "#d3135a"
  on-primary: "#ffffff"
  hairline: "#c2cddd"
  ink-smoke: "#667790"
  ink-75: "#0e141abf"
  button-primary-bg: "#66779080"
typography:
  display:
    fontFamily: Roobert, sans-serif
    fontSize: 58px
    fontWeight: 700
    lineHeight: 67.9992px
    letterSpacing: "-1.16px"
  display-mobile:
    fontFamily: Roobert, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: "-0.64px"
  subheading:
    fontFamily: Roobert, sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 31.9px
    letterSpacing: "-0.11px"
  body:
    fontFamily: Roobert, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: Roobert, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 17.9998px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 7px
  s4: 8px
  s5: 11px
  s6: 12px
  s7: 14px
  s8: 14.5px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 11px 16px 8px 0px
    height: 39px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px 10px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px 10px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 50px 0px 40px
---

## Overview

enel.com is the corporate home page of the Enel Group (title: "Energy, sustainability and innovation | Enel Group"). It is a calm, editorial corporate site on a white canvas with deep ink-navy text. The first screen is a centered statement, "Build the future through sustainable power", where the first line is rendered with a red-to-orange gradient fill and the second in ink, followed by a four-line paragraph: "We are committed to actively shape a better tomorrow, looking beyond the present. We reduce environmental impact with clean, innovative and responsible energy solutions, ensuring a better world for future generations."

Under it a "Highlighted contents" carousel shows three or more photo stories with bold headlines ("Growth, productivity, and an improved risk/return profile: Enel's new Strategic Plan", "From wind to creativity: the winners of WinDesign", "Not another light gone out: Panchine Rosse (red benches) against gender-based violence"), then a magenta "Discover our stories" link. The next section, "The power company that is changing the face of energy", introduces the group's history and purpose with two paired items, "Our story" ("First in Italy and then in 27 countries, our energy has empowered human progress.") and "Vision" ("Drive electrification, fulfilling people's needs and shaping a better world."), each with a line icon and a "Discover more" link. The page is 5,499px tall with 551 visible elements.

Above the white header sits a dark top bar with a group switcher ("Enel Group" with a dropdown, "Group websites", "Enel Green Power" and others) and tabs Company, Media, Investors, Careers. The main menu is About us, Our business, Commitments, Join us, Learn with us, and a search icon, with the multicolor Enel wordmark at left.

## Colors

Ink is #0e141a (the declared `--black` and `--font-color`), used for headlines and body. The brand action color is magenta #d3135a, declared as `--primary` and `--magenta`, and measured as the color of text links such as "Discover our stories" and "Discover more". The secondary brand color is ocean blue #0047cc (`--secondary`, `--ocean`), with a full ramp declared: dark-ocean #003eb3, #003699, #002466, light-ocean #0152e8, #1863ed, #387cfa, light-blue #e4ecfb and #41b9e6. Neutrals measured on the page: snow #eff2f7 (section and footer ground), #c2cddd (`--dark-snow` / `--border-color`) and smoke #667790 (secondary text and the translucent fill of the top-bar tab at 50 percent, #66779080). Text at 75 percent ink (#0e141abf) appears for secondary copy. Further hues are declared for status and data use: yellow #ffc82c, orange #ff5a0f, red #eb0a00, green #55be5a, success #13ce66, cyan #12caea. A purple #763CAD and #3699F1 belong to a consent-tool variable set (`--tc-*`) and are not brand colors.

## Typography

Roobert is the only text family (loaded at 300, 400 and 750; a separate `roobertenel` face at normal and bold is also declared), with sans-serif fallback. Measured desktop styles: display 58px/68px (67.9992px) at 700 with -1.16px letter-spacing; subheading 22px/31.9px at 700 with -0.11px; body 22px/32px at 400; interface button and navigation 13px/18px at 400. Other measured sizes are 16px, 18px, 27px, 40px and 48px. Tracking tightens on large bold type and is normal for body. Roobert is a commercial typeface; a geometric humanist sans with a bold weight is the substitution role.

## Layout

Content is centered in a narrow column at the top (headline and paragraph) and widens for the carousel, which bleeds off both viewport edges with round prev/next buttons at the sides. Subsequent sections are left-aligned with large headings in the left half and copy in a narrower indented column, with two-up item rows. Footer padding is 50px 0 40px on a snow ground. The measured gaps list is empty and the spacing tokens are small increments (1px to 20px).

## Elevation & Depth

No box shadows were measured. The root declares `--shadow-color` rgba(14,20,26,0.6) and `--tc-btn-shadow-color` #00000033, but no element was observed using them. Depth comes from the dark top bar against the white header, the hairline under the header, and photography in the carousel cards.

## Shapes

The only measured radius is 50% (round carousel arrows, dark with white chevrons). Everything else is square-cornered: the top-bar tab, images and text blocks carry 0px radius. A consent-tool variable `--tc-button-border-radius` of 5px is declared but is not part of the site's own design language.

## Components

Top-bar tab: Roobert 13px, white text on a #66779080 fill, 0px radius, padding 11px 16px 8px 0, 39px high (the active "Company" tab). Navigation links: 13px, padding 8px 16px 10px. Text link: magenta Roobert with a small chevron ("Discover more"). Carousel: photo cards with a bold ink caption under each image and round dark arrow buttons. Section item: a blue line icon above a bold heading, copy and a magenta link. Footer: snow ground with ink text.

## Design System Architecture

No public design system documentation was found or opened. The shipped CSS has 66 root variables forming a named palette (`--magenta`, `--ocean`, `--yellow`, `--snow`, `--smoke`, with `dark-`/`light-` ramps), semantic aliases (`--primary`, `--secondary`, `--success`, `--warning`, `--danger`, `--font-color`, `--border-color`), focus tokens (`--focus-focus-offset-inner` 2px, `--focus-focus-offset-outer` 4px, `--effects-focus-on-surface` #1f6cf9, `--focus-focus-hover-effect` #f7f8fb), and safe-area insets. A `--tc-*` set belongs to a third-party consent component.

## Do's and Don'ts

Do use ink #0e141a on white and snow grounds, magenta #d3135a for links and calls to action and ocean #0047cc as the secondary. Do keep corners square. Do set headings at 700 with negative tracking. Do use the Enel multicolor treatment only on the logo and the single gradient headline phrase.

Don't use the consent-tool purple or blue as brand colors. Don't add rounded cards or shadows; none are measured. Don't set body below 18px on mobile.

## Responsive Behavior

Measured at 390px: the display style is 32px/36px at 700 with -0.64px tracking, body is 18px/26.18px, and navigation is 16px. Menu behavior, carousel reflow and hover or focus appearance were not measured.

## Iteration Guide

For new content, keep the white canvas, ink #0e141a text, Roobert 700 headings at 58px/68px (32px/36px mobile) and 22px/32px body, and add magenta links with a chevron. Use snow #eff2f7 for alternate bands and the footer, #c2cddd for hairlines, and ocean for secondary emphasis. Keep corners square except for round 50% icon buttons. Validate any status color against the declared ramps.

## Voice and Content Model

Enel writes in the first person plural and in short purposeful sentences: "We are committed to actively shape a better tomorrow", "Enel began as an energy utility like many others. But as our capacity to power society grew, so did our interest in innovative technologies." Section titles are statements, not labels ("The power company that is changing the face of energy"), and each is paired with one or two quiet paragraphs. Stories are presented as news-style cards, mixing financial news (the Strategic Plan), culture and design (the WinDesign winners) and social causes (the red benches campaign against gender-based violence), which signals that the corporate home page serves investors, media and the public at once. The navigation reflects those audiences: Company, Media, Investors and Careers are in the top bar, while About us, Our business, Commitments, Join us and Learn with us are in the main menu. Link labels end in "Discover", never "Click here", and always include a small chevron.
