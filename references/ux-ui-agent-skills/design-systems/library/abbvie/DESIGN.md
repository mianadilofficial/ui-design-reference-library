---
version: alpha
name: AbbVie
category: "Pharma"
description: "Pharmaceutical company homepage measured at abbvie.com: white canvas, deep navy ink #071d49, vivid blue #0066f5 links, purple #8a2ecc headline emphasis, F37 Lineca Medium 800 display at 64px, Roboto body, large single-corner 40px and 80px radii and outlined white buttons on photography."
colors:
  canvas: "#ffffff"
  ink: "#071d49"
  primary: "#0066f5"
  surface-subtle: "#fafafa"
  black: "#000000"
  ink-muted: "#666b7a"
  accent-purple: "#8a2ecc"
  link: "#035fe6"
typography:
  display:
    fontFamily: "\"F37 Lineca Medium\", Helvetica, Arial, sans-serif"
    fontSize: 64px
    fontWeight: 800
    lineHeight: 68px
    letterSpacing: "-0.2px"
  display-mobile:
    fontFamily: "\"F37 Lineca Medium\", Helvetica, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 800
    lineHeight: 34px
  subheading:
    fontFamily: "\"F37 Lineca Book\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 650
    lineHeight: 44px
  body:
    fontFamily: "\"Roboto Regular\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"Roboto Regular\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"Roboto Bold\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 0.84px
    textTransform: uppercase
rounded:
  xs: 40px
  sm: 80px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3.13px
  s3: 4px
  s4: 5px
  s5: 7.5px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 16px 40px
    height: 54px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

## Overview
AbbVie's home page (title "Pharmaceutical Research & Development | AbbVie", lang en) uses a human-story voice for a pharmaceutical company. The header carries the lowercase "abbvie" wordmark, the links Who We Are, Science, Patients, Join Us and Sustainability, and utility items More, Global and a search icon. The hero is a dark navy photographic panel with a rounded top-left corner holding a portrait of a person with Parkinson's disease, a caption ("Steve, Real person with Parkinson's disease"), the white headline "Behind every breakthrough is a person." and a small uppercase blue link "EXPLORE THE STORIES". A white news carousel card overlaps the hero's lower edge and shows press-release and article teasers with "READ ARTICLE" links and a "10 Minute Read" clock label, with dot pagination below.

Below the hero, section headlines mix navy with a purple emphasis: "Patients are at the heart of **everything we do.**" and "We solve the **tough challenges.**", where the highlighted words are `{colors.accent-purple}` (#8a2ecc). A full-width navy-tinted video panel ("Meet the people inspiring the medicines we make.") contains a centred outlined "WATCH 0:15" button. A cookie banner sits in the first capture screen; it is a consent control and is not documented as brand UI.

## Colors
Text is `{colors.ink}` (#071d49, a deep navy) at 4357 character weight, white at 1707 on dark panels, `{colors.primary}` (#0066f5, a vivid blue, 188), `{colors.ink-muted}` (#666b7a, 157, used for article dates and summaries), `{colors.accent-purple}` (#8a2ecc, 34), black (32) and the link blue `{colors.link}` (#035fe6, 20). Page backgrounds are white `{colors.canvas}` (1346), `{colors.surface-subtle}` (#fafafa, 845), `{colors.black}` (770), pale blue-lilac #f1f3ff (697), navy (412), #f4f4f4 (391) and the dark banner #212121 (184).

The site's own variables name the palette: `--corp-color-text-default` #071d49, `--color-accent-blue` #0066f5, `--corp-color-link-default` #035fe6, `--corp-color-link-hover` #136ff6, `--color-purple-primary` #8a2ecc, `--color-purple-light` #a86bde, `--color-blue-light` #a6b5e0, `--color-orange-dark` #cf451c, `--color-orange-light` #f7634f, `--color-accent-green` #338700, `--color-outline-focus` #0bf and form colours such as `--corp-form-primary-color` #7c3098. Hover on the "EXPLORE THE STORIES" link was measured: its colour changes from rgb(71, 159, 248) to rgb(166, 181, 224) with a matching border colour change. Article-teaser links measured a border colour change from rgb(3, 95, 230) to rgb(19, 111, 246).

## Typography
AbbVie loads F37 Lineca Book (weight 650) and F37 Lineca Medium (weight 800) for headings, and Roboto Regular (400), Roboto Bold (700) and Roboto Light (300) for body and controls, plus an "Abbvie Icon" icon font. Fallback is Helvetica, Arial, sans-serif.

- `{typography.display}`: F37 Lineca Medium 800 at 64px / 68px, letter-spacing -0.2px (the white hero headline). Mobile: 30px / 34px.
- `{typography.subheading}`: F37 Lineca Book 650 at 40px / 44px, navy.
- `{typography.body}`: Roboto Regular 400 at 20px / 24px. Mobile body text is 14px / 20px.
- `{typography.nav}`: Roboto Regular 400 at 18px / 24px.
- `{typography.button-secondary}`: Roboto Bold 700 at 14px / 20px, uppercase, 0.84px tracking.

Font substitutes: F37 Lineca is a commercial geometric sans; Helvetica or Arial is the site's own fallback and any geometric sans with a heavy weight would be a substitute (a suggestion, not a measurement).

## Layout
Desktop width is 1280px with a page height of 8385px. Header height uses a `--nav-height` variable and the hero overlaps the next section (`--hero-overlap: -11.2rem`). Content uses a two-column pattern: a large headline at the left and a paragraph with a small uppercase link at the right. Spacing variables use rem steps (`--corp-gap-xl: 2.4rem`, `--corp-spacing-*` from tens to hundreds of rem tenths). The measured gap and padding set starts at 2px, 3.13px, 4px, 5px, 7.5px, 8px, 10px, 12px, 14px and 15px.

## Elevation & Depth
Shadows in the stylesheet: `0px 2px 10px -3px #999`, `0px 0px 12px 2px #c7c5c7`, `-3px -3px 5px -2px #c7c5c7` and `0 0 18px rgba(0,0,0,.2)`. The carousel card that overlaps the hero reads as raised through overlap and white-on-dark contrast. The role-level boxShadow for body, headline and text is none.

## Shapes
The hero panel and video panel use large single-corner radii: the radius frequency lists "80px 0px 0px" (3 uses) and "40px 0px 0px" (2 uses), exposed as `{rounded.xs}` (40px) and `{rounded.sm}` (80px). Round controls use 50% (4 uses). Small interface elements use 2px and 3px. The pill `{rounded.pill}` is 9999px.

## Components
**Outlined secondary button** (`button-secondary`): transparent over a dark photograph, white text and 1px-style white border `{colors.canvas}`, 54px tall, padding 16px 40px, Roboto Bold 14px uppercase tracked 0.84px. The example is "WATCH 0:15" with a play icon.

**Text link with arrow**: uppercase small blue label such as "EXPLORE OUR STORIES" with a chevron; colour `{colors.primary}`, on dark panels a lighter blue.

**News carousel card**: white card, date label, headline in Roboto, "READ ARTICLE" link and read-time label, prev/next chevrons and three dots.

**Navigation**: white bar, navy `{colors.ink}` text in `{typography.nav}`, 72px high on mobile.

## Design System Architecture
The homepage could not be fetched for this document (see _toolErrors in SOURCES.json), so no brand guideline link was seen. The shipped CSS shows a "corp" token system: `--corp-typography-lineheight-display-base: 6rem`, `--corp-typography-lineheight-body-lg: 2.4rem`, `--corp-font-weight-medium: 500`, `--corp-font-weight-bold: 700`, `--corp-typography-letterspacing-tight-em-sm: -0.02em`, `--corp-focus-visible-outline-offset-md: 0.2rem`, and semantic names (`--surface-background-default`, `--corp-color-text-default`, `--color-surface-highlight-inverse`). Fonts are exposed as `--heading-font-family`, `--heading-font-family-bold`, `--body-font-family` and `--roboto-bold-font-family`. Source: the measured extraction of https://www.abbvie.com/.

A note on imagery and tone: the photography shows individual patients and scientists, lit dramatically against navy backgrounds, and the copy is written in plain first-person-plural statements ("We solve the tough challenges.", "Meet the people inspiring the medicines we make."). Captions identify a person by first name and condition. Dates in teasers are uppercase ("OCTOBER 14, 2026"), set in the muted grey, above a headline. Every teaser is a link and the whole 200px-high teaser block was measured as a link, whose border colour shifts on hover from #035fe6 to #136ff6 while text colour stays #666b7a.

The layout keeps a strong rhythm: a dark hero, a white teaser strip, a white statement section with an asymmetric two-column split, a full-bleed video panel inset from the page edges, and then another statement section. Each section is introduced by either an uppercase tracked kicker such as "SCIENCE & INNOVATION" or a large headline.

## Do's and Don'ts
- Do use deep navy `{colors.ink}` for text and `{colors.primary}` for small link accents.
- Do emphasise two or three words of a headline in `{colors.accent-purple}`.
- Do round one corner of large photographic panels with the 40px or 80px radius.
- Do keep article metadata in `{colors.ink-muted}`.
- Don't fill buttons; secondary actions are outlined on dark imagery.
- Don't document the cookie banner as a component.
- Don't use bold body copy; headings carry the weight.

## Responsive Behavior
Measured at 390px: the h1 falls from 64px to 30px (line-height 34px, box 350px wide), body text from 20px to 14px (line-height 20px, box 310px) and the header is 72px tall at 390px wide with 16px nav text. No mobile CTA was detected. Navigation collapse and carousel behaviour were not measured.

## Iteration Guide
1. White canvas, navy text `{colors.ink}`, blue accent `{colors.primary}`.
2. Hero: dark navy photograph with one large rounded corner, 64px F37 Lineca Medium headline in white.
3. Section headlines at 40px with purple emphasis words.
4. Outlined white buttons on imagery, 54px high, 14px uppercase.
5. Teasers: grey dates and navy headlines with a blue uppercase link.
6. Dark mode, tablet breakpoints and form states are not measured.
