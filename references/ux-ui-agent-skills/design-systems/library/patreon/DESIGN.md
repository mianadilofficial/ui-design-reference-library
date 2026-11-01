---
version: alpha
name: Patreon
category: "Media & Consumer Tech"
description: "Patreon's home page is a scroll of full-bleed creator photography and periwinkle-blue (#71a0ff, #94bbff) bands, set in the ABC Oracle variable font at an ultra-light 250 weight (166.667px hero with -10px tracking), with black #000000 26.67px-radius pills with white text and a black footer."
colors:
  canvas: "#71a0ff"
  surface-blue-light: "#94bbff"
  surface-steel: "#95adcb"
  surface-taupe: "#90867a"
  white: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-muted: "#959595"
  header-glass: "#ffffff99"
  pill-glass: "#ffffff29"
  highlight: "#0e87eb"
typography:
  display:
    fontFamily: Oracle, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans Regular", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 166.667px
    fontWeight: 250
    lineHeight: 163.333px
    letterSpacing: "-10px"
  display-mobile:
    fontFamily: Oracle, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans Regular", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 64px
    fontWeight: 250
    lineHeight: 62.72px
    letterSpacing: "-3.84px"
  heading:
    fontFamily: Oracle, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans Regular", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 113.333px
    fontWeight: 250
    lineHeight: 98.6px
    letterSpacing: "-6.8px"
  caption:
    fontFamily: Oracle, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans Regular", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 13.3333px
    fontWeight: 400
    lineHeight: 16px
  body:
    fontFamily: Oracle, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans Regular", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 350
    lineHeight: 26.4px
    letterSpacing: "-0.44px"
  button:
    fontFamily: Oracle, "Noto Sans JP", "Noto Sans KR", "Noto Sans SC", "Noto Sans TC", "Noto Sans Regular", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 12.8px
    fontWeight: 350
    lineHeight: 12.8px
    letterSpacing: "-0.213333px"
rounded:
  cta: 26.67px
  sm: 33.33px
  md: 40px
  pill: 9999px
spacing:
  s1: 6px
  s2: 6.67px
  s3: 9.33px
  s4: 10px
  s5: 12px
  s6: 12.67px
  s7: 13.33px
  s8: 16px
  s9: 18.67px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 13.3333px 18.6667px
    height: 43px
    border: "1px solid #000000"
  button-outline-light:
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 13.3333px 18.6667px
    height: 43px
    border: "1px solid #ffffff"
  locale-pill:
    backgroundColor: "{colors.pill-glass}"
    textColor: "{colors.white}"
    rounded: "{rounded.sm}"
    padding: 9.33333px 18.6667px
    height: 49px
  search-input:
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 40px
  nav:
    backgroundColor: "{colors.header-glass}"
    textColor: "{colors.white}"
  signup-card:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink}"
    rounded: "{rounded.cta}"
    padding: 46.6667px 26.6667px 66.6667px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.white}"
    padding: 40px 33.3333px 33.3333px
---

# Patreon

## Overview

Patreon's home page (https://www.patreon.com/, title "Where Creator Communities Thrive — Patreon") reads like an art-directed magazine. It is 6,591px of full-bleed photography and soft blue fields. The hero is a dark blue-lit studio shot of a singer at a microphone, overlaid with white ultra-light type, "Your wildest / creative reality", at 166px. The headline rotates through creator types: the measured h1 read "Where podcasts grow". A small creator caption ("Jade Novah is fusing her loves of music, writing, and comedy") sits at the right.

The page then cycles through large statements set in the same thin face, each on a periwinkle band or a photo:
- "Creativity powered by fandom", in taupe over a collage of creator portraits.
- A close-up photo of a musician in headphones with the quote "Patreon provides a space for artists to sustain ourselves by connecting us directly to our own communities." — KAMAUU.
- "Complete creative control", surrounded by floating post cards.
- "Creators. Fans. Nothing in between.", beside a chat-thread phone screen.
- "Turning passions into businesses", beside an earnings dashboard ("$16,414.27").
- A white "Your world to create" sign-up card over a portrait.
- A black footer.

The voice is confident and creator-first ("Patreon is your space to create what excites you most, rough or polished, big or small."). The visual tension comes from enormous whisper-thin headlines against intimate, warmly lit portraits.

## Colors

The page is not set on a single flat canvas. The largest measured background is **periwinkle `#71a0ff`** (2,443 area units), followed by the lighter **`#94bbff`** (1,451), so `canvas` here is the periwinkle. The `<body>` itself has no background.

- **Canvas `#71a0ff`.** The dominant blue band colour.
- **Surface blue light `#94bbff`.** The lighter blue sections.
- **Surface steel `#95adcb`** and **surface taupe `#90867a`.** Large measured areas; in the capture, the "Creativity powered by fandom" headline is set in a taupe-brown on the grey-blue band.
- **White `#ffffff`.** Text on photos, the sign-up card, and the outline buttons.
- **Ink `#000000`.** Black text on the blue bands (1,073 characters) and the footer background.
- **Primary `#000000`.** All main action pills are black; **on-primary `#ffffff`**.
- **Ink muted `#959595`.** Small secondary text.
- **Header glass `#ffffff99`** and **pill glass `#ffffff29`.** Translucent white for the header and the locale selector pills.
- **Highlight `#0e87eb`.** Declared as `--color-highlight`; not measured on a rendered element.

## Typography

One family carries the whole design: **Oracle**, self-hosted as `ABCOraclePlusVariable` (a variable font with weights 1–999 and an oblique axis of 0–20°). Noto Sans JP/KR/SC/TC serve as CJK fallbacks.

- **Display.** 166.667px at weight **250** (ultra-light), with a 163.333px line height and -10px tracking (-6%).
- **Heading.** 113.333px/250 with a 98.6px line height and -6.8px tracking: "Complete creative control", "Turning passions into businesses". A 34.67px size with -1.92px tracking is also measured.
- **Body.** 22px/350 with 26.4px leading and -0.44px tracking.
- **Caption.** 13.3333px/400 with a 16px line height: creator captions and card text, the most frequent size (745 characters).
- **Button.** 12.8px/350 with a 12.8px line height and -0.21px tracking.

Measured weights are 400, 350, 250, 300 and 500. Tracking is negative at every size, scaled to the size, except a +0.24px tracking on 12.8px footer text. The sizes are fractional as computed at 1280px wide. The root variables compose type from tokens, for example `--font-body: var(--font-weight-normal) var(--font-size-body) /120% var(--font-family-heading)` and `--font-sub-h2: var(--font-weight-normal) 3.2rem/118% …`.

## Layout

Measured at 1280px wide. The header (87px) is translucent white glass. It has Creators, Features, Pricing and Resources menus and an outlined "Updates" pill at the left, the PATREON wordmark in the centre, and "Find a Creator" search, "Log in" and a white "Get Started" pill at the right. Sections are full-bleed; text blocks hang off a wide left margin or split into two columns ("More ways to earn" / "Unlock growth"). Headlines overlap photos and cards freely: "Creators. Fans. Nothing in between." runs into its paragraph, and "businesses" drops under "Turning passions into". Floating post cards and phone screens are scattered asymmetrically around the headlines. The footer has five link columns (Creators, Features, Pricing, Resources, Company), app-store badges, locale pills and social icons.

Measured gaps include 31.2px, 48px, 66.67px and 104px; paddings cluster around 18.67px, 12.67px and 13.33px.

## Elevation & Depth

No box shadows were measured on rendered elements. Depth comes from layering: phone screens and post cards float over the blue bands, headlines overlap images, and the header is a translucent glass bar (`#ffffff99`) over the hero photo. The CSS declares a few small shadows (`0 5px 10px rgba(0, 0, 0, 0.1)`, `0px 1px 5px 1px rgba(0, 0, 0, 0.1)`) for other components.

## Shapes

Rounded but not bubbly. Pills dominate the controls: **26.67px** is the most frequent radius (15 elements: action pills, nav buttons, the sign-up card). Locale pills use 33.33px, and the search field 40px. Avatars are 50% circles. The photography itself is square-edged and full-bleed. The rounded controls contrast with the hard edges of the photos.

## Components

- **Primary pill.** Black fill, white Oracle 12.8px/350, `1px solid #000000`, 26.67px radius, 13.33px 18.67px padding, 43px tall: "Get started", "Create on your terms", "Build real community", "Set up shop".
- **Outline pill.** "Updates": transparent, white text, `1px solid #ffffff`, the same size and radius.
- **Header nav.** Text buttons that hover from black to white text (measured on "Features").
- **Search.** "Find a Creator", a 40px-radius, 40px-tall outlined field with white text.
- **Creator caption.** A circular avatar with a 13.33px caption beside the hero.
- **Sign-up card.** White, 26.67px radius, 46.67px 26.67px 66.67px padding: an avatar, "Your world to create", a black "Get started" pill, a "Log in" link and app-store badges.
- **Locale pill.** `#ffffff29` translucent fill, white 12px text, 33.33px radius, 49px tall.
- **Footer.** Black; white column headings and links.

## Design System Architecture

Patreon publishes brand guidelines at https://www.patreon.com/brand. They cover the horizontal (preferred) and vertical lockups, partnership lockup rules (match optical height, leave a P-width gap), a list of don'ts ("Don't use the logo in a word or sentence", "Don't use the logo as a window") and a downloadable asset folder. The page names no colour or typeface values. The marketing site's shipped CSS shows a token system on `:root`. It has semantic colour variables built with `color-mix()` (`--color-mix-neutral-80: color-mix(in srgb,#fff 80%,#000)`, `--color-action-light`, `--color-neutral-20`), composed font shorthands (`--font-body`, `--font-label-1`, `--font-sub-h2`), easing tokens (`--ease-in-out-back: cubic-bezier(0.68,-0.55,0.265,1.55)`, `--linear`), and `--color-highlight: #0e87eb`. Assets are served from `/_marketing_assets/_next/`.

## Do's and Don'ts

**Do**
- Set headlines huge and ultra-light (Oracle 250) with strongly negative tracking.
- Let full-bleed, warmly lit creator portraits carry the page.
- Use periwinkle blue fields (`#71a0ff`, `#94bbff`) between photos.
- Make every action a black pill with white text and a 26.67px radius.
- Let headlines, cards and screenshots overlap asymmetrically.

**Don't**
- Don't use bold headlines; the display weight is 250.
- Don't use the logo as a window or inside a sentence (brand page rules).
- Don't box content in shadowed cards; layering and photography provide the depth.
- Don't use a colourful primary button; actions are black (or white on dark photos).

## Responsive Behavior

Measured at 390px wide. The hero headline drops from 166.667px to **64px/62.72px** with -3.84px tracking, and section headings from 113.333px to 58px/59.16px with -4.06px tracking. Body text becomes 20px/400 with 30px leading. The primary pill grows to 16px/350 text with a 40px radius, 10px 14px padding and 41px height. The mobile header (115px) has an "Open menu" toggle, measured as visible, plus the logo, "Log in" and "Get Started". In the mobile capture, the hero video band is dark blue, and the section headlines and photos run in a single column. The dashboard and sign-up card appear full width, and the footer shows its groups (Creators, Features, Pricing, Resources, Company) as rows with chevrons; their open state was not measured. The stylesheet corpus recorded media queries at `max-width: 768px` and `min-width: 640px`.

## Iteration Guide

1. Start with full-bleed creator photography and periwinkle `#71a0ff` / `#94bbff` bands.
2. Set one huge Oracle 250 headline per section (166px hero, 113px sections; 64px/58px on mobile) with tracking of about -6%.
3. Add a 22px/350 paragraph and one black 26.67px-radius pill.
4. Float product cards and phone screens around the headline asymmetrically, with no shadows.
5. Use a translucent white glass header and a black footer.
6. Check the brand page before placing the logo or making partner lockups.
