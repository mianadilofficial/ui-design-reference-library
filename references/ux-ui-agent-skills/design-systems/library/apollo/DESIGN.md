---
version: alpha
name: Apollo
category: "Product & SaaS"
description: "Apollo.io's apollo.io site: a white #ffffff content sheet with 24px corners set inside a warm grey #ccc9c6 frame, black #000000 seasonMix serif headlines (64px/550), abcDiatype body text, an acid yellow #ebf212 8px-radius 'Sign up for free' button (hover #fcffa8), black and outlined secondary buttons, warm #f7f5f2 image panels and 24px-radius cards with #e4e5d9 borders."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  ink-soft: "#1a1a1a"
  ink-warm: "#47423d"
  ink-muted: "#736f6c"
  primary: "#ebf212"
  on-primary: "#000000"
  primary-hover: "#fcffa8"
  frame-grey: "#ccc9c6"
  panel-warm: "#f7f5f2"
  chip-bg: "#efefeb"
  chip-text: "#4d4d41"
  hover-fill: "#e5e3e1"
  nav-link-text: "#000000de"
  card-text: "#252521"
  card-border: "#e4e5d9"
  border-grey: "#94918e"
  stat-ink: "#3f3653"
typography:
  display:
    fontFamily: seasonMix, "seasonMix Fallback"
    fontSize: 64px
    fontWeight: 550
    lineHeight: 64px
    letterSpacing: "-0.64px"
  display-mobile:
    fontFamily: seasonMix, "seasonMix Fallback"
    fontSize: 44px
    fontWeight: 550
    lineHeight: 44px
    letterSpacing: "-0.44px"
  heading:
    fontFamily: seasonMix, "seasonMix Fallback"
    fontSize: 56px
    fontWeight: 550
    lineHeight: 58.8px
    letterSpacing: "-0.56px"
  card-title:
    fontFamily: seasonMix, "seasonMix Fallback"
    fontSize: 32px
    fontWeight: 550
    lineHeight: 35.2px
    letterSpacing: "-0.32px"
  body:
    fontFamily: abcDiatype, "abcDiatype Fallback"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.2px"
  button:
    fontFamily: abcDiatype, "abcDiatype Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  button-small:
    fontFamily: abcDiatype, "abcDiatype Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  nav:
    fontFamily: soehne, "soehne Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: 0.16884px
  input:
    fontFamily: soehne, "soehne Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 48px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button-small}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 40px
    border: "1px solid #000000"
  button-outlined-hover:
    backgroundColor: "{colors.hover-fill}"
  chip:
    backgroundColor: "{colors.chip-bg}"
    textColor: "{colors.chip-text}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4px 10px
    height: 29px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.frame-grey}"
    textColor: "{colors.ink}"
    height: 72px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-soft}"
    typography: "{typography.input}"
    padding: 0px 12px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.card-text}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xl}"
    padding: 20px 16px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.frame-grey}"
    textColor: "{colors.ink-soft}"
---

# Apollo — apollo.io

## Overview

Apollo.io's home page (https://www.apollo.io, title "The AI GTM System for Go-to-Market Teams | Apollo") presents its sales platform with an editorial, paper-like look. The whole page is a white sheet with rounded corners laid inside a warm grey `#ccc9c6` frame: the frame shows as the header bar, a thin margin around the sheet and the large footer. Inside, headlines are set in a bookish serif, body text in a neutral grotesque, small labels in a monospace, and a single acid yellow `#ebf212` marks the sign-up action.

The header carries the yellow-spoked Apollo logo, Products, Solutions, Resources, Customers and Pricing, then Log in, an outlined **Get a demo** and a yellow **Sign up for free**. The hero is centred: "Grow revenue with one connected GTM system" in seasonMix 64px, a short subline ("…with the agentic system that works where you work: Apollo, Claude, ChatGPT, and more."), a black/white toggle (**Sign up for free** / Request a demo), "No credit card required", an email field with a yellow **Sign up for free**, and outlined Google and Microsoft sign-up buttons. A large warm `#f7f5f2` panel shows stacked integration cards (Claude, Salesforce, "Connected" in green) and a monospace caption "JOIN OVER 600,000 COMPANIES USING APOLLO" heads a grey logo row. Alternating two-column feature rows follow ("Run your go-to-market, your way", "Give every team the same source of truth", "Let AI handle the busywork"), each with icon bullets, underlined product links and an outlined "Explore our … layer" button opposite a product mock on a warm panel. Later: compliance badges (GDPR, SOC 2, CCPA, ISO/IEC 27001…), a giant "600K+" stat, customer cards by role, a full-bleed yellow-cyan-pink fluid gradient CTA ("It's time to run your GTM like a system, not a set of tools") with a black **Get started for free** button, and a dense grey footer with an oversized black logo mark.

## Colors

All values are measured in `web/data/extracted/apollo.json`.

- **Canvas `#ffffff`** — the content sheet (52% of capture pixels); **frame grey `#ccc9c6`** — the header, page frame and footer (16%).
- **Ink `#000000`** — headlines and primary text; **ink soft `#1a1a1a`** — footer and inputs; **ink warm `#47423d`** — body paragraphs; **ink muted `#736f6c`** — captions and the Log in hover color.
- **Primary `#ebf212`** — acid yellow on Sign up for free with black text; hover lightens to **`#fcffa8`**.
- **Panel warm `#f7f5f2`** — image and mock panels; **chip bg `#efefeb`** with **chip text `#4d4d41`** — product chips.
- **Hover fill `#e5e3e1`** — the hover background of outlined buttons.
- **Card text `#252521`** and **card border `#e4e5d9`**; **border grey `#94918e`** on inputs; **stat ink `#3f3653`** — the dark violet of the "600K+" figure.
- **Nav link text `#000000de`** — 87% black.

## Typography

Four families are loaded:

- **seasonMix** (weight 550) for headlines: hero 64px / 64px at -0.64px; section headline 56px / 58.8px at -0.56px ("It's time to run your GTM like a system…"); card titles 32px / 35.2px at -0.32px; 48px and 40px in other sections; a 146px size for the "600K+" figure.
- **abcDiatype** (400, 700) for body and UI: 20px / 24px at -0.2px for lead text, 16px / 20.8px for buttons, 14px / 18.2px for small buttons and footer, 700 for footer headings.
- **soehne** (variable 100–900) for nav menus at 18px / 27px with 0.16884px tracking, and inputs at 16px.
- **foundersGroteskMono** for small uppercase captions (role labels "SALES LEADER", badge captions, "JOIN OVER 600,000 COMPANIES USING APOLLO").

Measured sizes by character count: 16px, 14px, 20px, 12px, 24px, 32px, 48px, 56px, 64px, 40px, 146px. All four are commercial typefaces; when unavailable, pair a transitional serif for headlines with a neutral grotesque and a monospace, keeping the 550 headline weight.

## Layout

At 1280px the sheet's content spans x = 60 to x = 1225 and the extraction detected up to 8 columns in a single 9,665px media band. The hero is centred and narrow; feature rows alternate image-left / text-right and text-left / image-right, with the warm panel taking half the width. Headlines in feature rows sit at the top of the text column and buttons at the bottom, with generous empty space between. Gaps cluster at 8px, 16px, 12px and 24px, with 50px and 64px between blocks; paddings at 24px, 20px, 36px and 40px.

## Elevation & Depth

No box-shadows were measured. Depth comes from the sheet-in-frame construction (white sheet on `#ccc9c6`), from warm `#f7f5f2` panels behind product mocks, and from the stacked, slightly offset integration cards in the hero illustration. Cards are outlined with 1px `#e4e5d9` borders.

## Shapes

**8px** (`rounded.sm`) is by far the most frequent radius: all buttons, inputs and chips. Cards use **24px** (`rounded.xl`); panels **12px** and **16px**, including bottom-only `0px 0px 16px 16px` corners where panels attach to cards; small icons **6px**. Avatars sit in square, lightly rounded frames; compliance badges are drawn as circles, shields and diamonds.

## Components

- **Primary button** — `#ebf212`, black abcDiatype 16px, 8px radius, padding 0px 20px, 48px tall; hover `#fcffa8`. A 40px / 14px version sits in the header.
- **Dark button** — black fill, white 16px text, 8px radius, 48px tall ("Get started for free").
- **Outlined button** — transparent, 1px black border, black 14px text, 8px radius, padding 0px 16px, 40px tall ("Get a demo", "Explore our Execution layer", Google/Microsoft sign-up); hover fills `#e5e3e1`.
- **Chip** — `#efefeb`, `#4d4d41` text, 8px radius, padding 4px 10px, 29px tall ("Apollo Anywhere", "Builder Studio", "GTM Harness").
- **Email field** — white with a thin grey border, 8px radius, paired with a yellow button.
- **Feature card** — white, 24px radius, 1px `#e4e5d9` border, padding 20px 16px, 32px serif title.
- **Customer card** — monospace role label, square portrait, name, title, company wordmark.
- **Accordion** — rows separated by thin rules with a minus/plus control ("Stay secure", "Stay compliant").

## Design System Architecture

No public design system or brand guideline was found: https://www.apollo.io/brand and https://www.apollo.io/press returned 404. The shipped site is a Tailwind build (`--tw-*` root variables) with a phone-input library's variables (`--PhoneInput-*`), neither of which carries Apollo brand values. The de-facto system is the measured set: the white-sheet-in-grey-frame layout, seasonMix headlines at 550 with -1% tracking, abcDiatype UI text, soehne nav and a mono caption face, one acid-yellow action color, black and outlined secondary buttons, 8px controls and 24px cards.

## Do's and Don'ts

**Do**
- Lay content on a white sheet inside a `#ccc9c6` frame.
- Use `#ebf212` with black text only for the sign-up action; use black or outlined buttons for everything else.
- Set headlines in seasonMix at 550 with tracking of -1% of the size.
- Keep controls at 8px radius and cards at 24px.
- Use monospace uppercase captions for labels and logo-row headings.

**Don't**
- Don't use yellow for text or large areas, except the one fluid-gradient CTA band.
- Don't add drop shadows; separate with frames, panels and 1px borders.
- Don't round buttons into pills.
- Don't treat Tailwind or phone-input variables as brand colors.

## Responsive Behavior

The 390px mobile pass recorded the hero headline at 44px / 44px with -0.44px tracking, the lead quote text at 18px / 21.6px with -0.18px, a 59px `#ccc9c6` header band with two visible header links and no menu toggle detected, and a 6,214px white band with content from x = 20 to x = 370. Mobile font sizes by frequency: 16px, 14px, 18px, 12px, 20px, 10px, 28px, 36px, 40px, 44px. The stylesheet's main breakpoints are min-width 768px, 1024px, 1440px and 1920px. Other reflow behavior was not measured.

## Iteration Guide

1. Put a white sheet with rounded corners inside a `#ccc9c6` frame; header and footer live on the frame.
2. Centre a seasonMix 64px / 64px headline at 550 with -0.64px tracking and a 20px abcDiatype subline.
3. Offer sign-up as an email field plus a 48px `#ebf212` button (8px radius), with outlined Google/Microsoft buttons below.
4. Alternate feature rows with `#f7f5f2` mock panels and outlined "Explore…" buttons.
5. Close with a fluid gradient CTA band and a dense grey footer.
6. Measure anything not listed here before adding it.
