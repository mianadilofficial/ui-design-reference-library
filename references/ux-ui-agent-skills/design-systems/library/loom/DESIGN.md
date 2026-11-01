---
version: alpha
name: Loom
category: "Productivity & SaaS"
description: "Loom's marketing home (an Atlassian product): white #ffffff canvas with pale blue #e9f2fe sections and footer, Loom blue #1868db pill buttons and banner, near-black #101214 text and dark bands, violet #bf63f3 accents, Charlie Display 700 headlines at 56.5px over Charlie Text body, 9999px pills and 39-66px rounded feature panels."
colors:
  canvas: "#ffffff"
  surface-blue-tint: "#e9f2fe"
  surface-dark: "#101214"
  surface-charcoal: "#292a2e"
  surface-violet-deep: "#48245d"
  surface-violet-light: "#eed7fc"
  ink: "#101214"
  ink-body: "#292a2e"
  ink-black: "#000000"
  accent-violet: "#bf63f3"
  primary: "#1868db"
  primary-dark: "#1558bc"
  navy: "#123263"
  on-primary: "#ffffff"
typography:
  display:
    fontFamily: "\"Charlie Display\", sans-serif"
    fontSize: 56.5385px
    fontWeight: 700
    lineHeight: 58.1781px
  display-mobile:
    fontFamily: "\"Charlie Display\", sans-serif"
    fontSize: 35px
    fontWeight: 700
    lineHeight: 36.015px
  heading:
    fontFamily: "\"Charlie Display\", sans-serif"
    fontSize: 40.3077px
    fontWeight: 700
    lineHeight: 46.0717px
  subheading:
    fontFamily: "\"Charlie Display\", sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 38.19px
  body:
    fontFamily: "\"Charlie Text\", sans-serif"
    fontSize: 15.2308px
    fontWeight: 700
    lineHeight: 26.1055px
  nav:
    fontFamily: "\"Charlie Text\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  link:
    fontFamily: "\"Charlie Text\", sans-serif"
    fontSize: 18.2462px
    fontWeight: 400
    lineHeight: 30.0514px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 39.38px
  2xl: 50px
  3xl: 65.85px
  pill: 9999px
spacing:
  s1: 1.44px
  s2: 1.52px
  s3: 1.59px
  s4: 1.91px
  s5: 7.62px
  s6: 8px
  s7: 15.23px
  s8: 16px
  s9: 22.85px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 15.2308px 22.8462px
    height: 57px
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.pill}"
    padding: 7.61538px 15.2308px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 0px 1px
  announcement-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    height: 60px
  feature-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
  video-bubble:
    textColor: "{colors.ink-body}"
    rounded: "{rounded.pill}"
    boxShadow: rgba(0, 0, 0, 0.25) 0px 3.24px 3.24px 0px
  footer:
    backgroundColor: "{colors.surface-blue-tint}"
    textColor: "{colors.ink}"
---

# Loom

## Overview

The measured page is `https://www.loom.com/`, titled "Free screen recorder for Mac and PC | Loom", language `en`. It markets Loom's async video messaging and screen recording. The header carries a small "ATLASSIAN" label above the Loom wordmark, showing Loom's place in Atlassian's product family, and the page's type and token naming reflect that.

The page is bright, product-led and confident. A 60px Loom-blue (`#1868db`) announcement bar ("NEW: Show it with Loom. Ship it in Cursor.") sits above a white header. The hero is centred: the headline "One video is worth a thousand words", a short subline about "AI-powered video messages", a blue pill "Get Loom for free" and a secondary "Install Chrome Extension" button, then a wide hero video of a person recording in an office with a round play button. Below, "Millions of people across 400,000 companies choose Loom" with a logo wall (HubSpot, Lacoste, Postclick, Brex, Asana, Walmart, Nordstrom, Disney and more).

The rhythm alternates white sections with saturated panels: a large Loom-blue rounded panel "Meet the all-new Loom for Mac"; feature rows ("The easiest screen recorder you'll ever use", "So much more than a screen recorder") with pastel-tinted rounded panels holding product UI and Loom's signature circular face-cam bubble; a near-black band "Keep your content safe"; a row of use-case cards (Sales, Engineering, Customer Support, Design) in pastel yellow, green, violet and blue; a blue panel "How to use async video messaging to improve communication"; a dark "Loom for Enterprise" panel with a glowing gradient product shot; a testimonial; and a pale blue footer. Copy is direct and benefit-led: "Record in a few clicks. Share anywhere. Collaborate better."

## Colors

- **canvas `#ffffff`** — main background; 46% of the capture.
- **surface-blue-tint `#e9f2fe`** — pale blue sections and the footer; second-largest area.
- **primary `#1868db`** — Loom blue: every CTA, the announcement bar and big feature panels. The stylesheet's Rovo gradient references it as `--thd-color-blue-70`.
- **primary-dark `#1558bc`** — `--thd-color-blue-80`, a deeper blue used in panels; **navy `#123263`** — another measured panel fill.
- **on-primary `#ffffff`** — text on blue.
- **ink `#101214`** — the most-read text colour and the dark band fill (`--thd-color-black`).
- **ink-body `#292a2e`** — secondary body text and the charcoal panel fill (`--lns-themeLight-color-body` resolves to `hsla(228,6%,17%,1)`).
- **accent-violet `#bf63f3`** — violet text accents (also `#c97cf4`); **surface-violet-deep `#48245d`** — a chat-style product card; **surface-violet-light `#eed7fc`** — violet tint panels.
- **ink-black `#000000`** — small amounts of pure black text.

Other measured pastel panel fills: `#f8eefe` (`--thd-color-violet-10`), `#efffd6` (lime), `#fff5d4` (yellow) and `#82b536` (green). A grey `#7d818a` (`--thd-color-grey-60`) is used for minor text, and `#f6f6f6` fills a thin strip under the hero.

## Typography

Loom uses Atlassian's brand typefaces: **Charlie Display** (700) for headings and **Charlie Text** (400, 500, 700) for everything else. Charlie Text carries 4,132 measured characters, Charlie Display 1,776. Charlie is proprietary; a neutral grotesque at the same weights is the closest substitute.

- **display** — Charlie Display 56.5385px / 700 / 58.1781px. The h1 and large section titles ("Meet the all-new Loom for Mac").
- **heading** — Charlie Display 40.3077px / 700 / 46.0717px. "Millions of people across 400,000 companies choose Loom".
- **subheading** — Charlie Display 30px / 700 / 38.19px. Feature titles ("Edit your videos like a pro", "Lightning fast screen recording").
- **body** — Charlie Text 15.2308px / 700 / 26.1055px. Button labels and testimonial names; the most-read size.
- **link** — Charlie Text 18.2462px / 400 / 30.0514px. Paragraph text with inline links ("record your screen").
- **nav** — Charlie Text 16px / 700 / 24px.

The fractional sizes (15.2308px, 23.5385px, 25.3077px, 56.5385px) show that type, spacing and radii are scaled fluidly with the viewport; at 390px they land on round numbers (14px, 21px, 35px). Other measured sizes: 23.5385px (1,250 characters — lead paragraphs), 25.3077px, 12.2308px (uppercase footer headings), 18.4px, 18px. Weights are 400, 700 and a little 500; headings are always 700.

## Layout

At 1280px the page is 12,694px tall. Measured bands: the 60px `#1868db` bar (x=182–1098); a 558px white hero (x=186–1185); a 627px hero video; a 60px `#f6f6f6` strip; one 10,029px white band (x=69–1211, up to four columns) holding every feature section and panel; a 1,205px `#e8f1fd` footer region (x=106–1174, two columns); and a 159px white legal strip.

Spacing values are fluid fractions of the same scale: gaps 16px, 15.2308px, 65.92px, 24px, 32px; paddings 34.56px, 103.04px (large section padding), 15.2308px, 24px, 22.8462px, 65.92px, 84.48px. Panels sit inset from the page edge with generous internal padding; feature rows put a short text block beside a large rounded media panel.

## Elevation & Depth

Shadows are soft and layered:

- `rgba(0, 0, 0, 0.04) 0px 2px 6px 0px, rgba(0, 0, 0, 0.06) 0px 5px 18px 0px, rgba(0, 0, 0, 0.1) 0px 24px 83px 0px` — floating cards and the nav (equal to `--thd-shadow-nav`).
- `rgba(0, 0, 0, 0.25) 0px 3.24px 3.24px 0px` — the circular face-cam video bubbles.
- `rgba(0, 0, 0, 0.03) 0px 4px 6.4px 0px, rgba(0, 0, 0, 0.05) 0px 3px 9.6px 0px …` — subtle product-card lift.

Depth also comes from colour blocking: blue and near-black panels against white, and pastel panels holding layered product UI and face bubbles.

## Shapes

Measured radii: `9999px` on 58 elements (all buttons and chips), `65.8462px` on 20 (the big feature panels), `39.3846px` on 15 (medium panels, sometimes only on one side — `39.3846px 0px 0px 39.3846px`), `12px`, `8px`, `6px`, `16px`, `50px`, and `50%` for the round video bubbles. The vocabulary is pills for actions, circles for faces, and very large soft corners for panels.

## Components

- **button-primary** — "Get Loom for free" / "Learn more": `#1868db`, white Charlie Text 15.2308px/700, `15.2308px 22.8462px` padding, 57px tall, full pill.
- **button-small** — header "Get Loom for free" / "Download now": same blue pill, `7.61538px 15.2308px`, 41–48px tall.
- **announcement-bar** — 60px `#1868db` strip with white 16px/700 text.
- **feature-card** — white or pastel panel with 39–66px corners, a 30px/700 title, body text and a text link with arrow.
- **video-bubble** — circular face-cam video with `rgba(0, 0, 0, 0.25) 0px 3.24px 3.24px 0px` shadow, overlapping product screenshots.
- **use-case card** — pastel (yellow, lime, violet, blue) rounded card with a portrait, a title (Sales, Engineering, Customer Support, Design) and a short line.
- **footer** — `#e9f2fe`, uppercase 12.2308px/700 column headings, link lists.

## Design System Architecture

No public Loom design system documentation was opened. Loom's press URL (https://www.loom.com/press) redirects to https://www.loom.com/newsroom, which redirects (308) to Atlassian's investor news page; no brand guideline or design system link was found, so no search was run.

The shipped CSS shows two token layers in its 400 root variables. Variables prefixed `--lns-` form a themable system with light and dark themes (`--lns-themeLight-color-body`, `--lns-themeDark-color-background`, `--lns-themeLight-color-primaryActive`, `--lns-color-record`), a radius scale in half-rem units (`--lns-radius-175: calc(1.75 * 0.5rem)`, `--lns-radius-250`), type sizes (`--lns-fontSize-heading-lg: calc(6 * 0.5rem)`), letter-spacing (`--lns-letterSpacing-large: -0.2px`), form-field tokens and shadows (`--lns-shadow-small`). Variables prefixed `--thd-` hold the marketing palette as stepped ramps (`--thd-color-blue-40/50/70/80`, `--thd-color-violet-10/60/90-80`, `--thd-color-grey-20/50/60/70`, `--thd-color-yellow-60`), spacing (`--thd-space-fixed-4xl: 3.5rem`), breakpoints (`--thd-screen-lg: 64rem`), the nav shadow and a `--thd-color-rovo-gradient` conic gradient. Tailwind `--tw-*` variables are also present.

## Do's and Don'ts

**Do**
- Use white with pale blue `#e9f2fe` sections; reserve `#1868db` for actions and a few full panels.
- Make every button a pill; primary 57px tall with 700-weight labels.
- Set headings in Charlie Display 700; body in Charlie Text.
- Show people: circular face-cam bubbles over product screenshots.
- Use very large panel corners (39–66px) and soft, layered shadows.
- Add pastel panels (violet, lime, yellow) for use cases.

**Don't**
- Don't use square or slightly rounded buttons; measured buttons are all pills.
- Don't set headings at regular weight.
- Don't use pure black backgrounds; the dark bands are `#101214` and `#292a2e`.
- Don't overuse violet; it is an accent for text and small panels.
- Don't use hard, single-layer drop shadows.

## Responsive Behavior

The mobile pass at 390px recorded: two visible header links and a menu toggle labelled "Toggle navigation menu"; a 91px blue announcement band (x=32–358) under a 90px white header; h1 at Charlie Display 35px / 700 / 36.015px; h2 at 28px / 700 / 32.004px with `0px 32px` padding; the CTA at 14px/700, `14px 21px`, 52px tall, pill. Most-read sizes became 14px, 18px, 17.04px and 21px — the fluid scale landing on round values. Content ran from x=32 to x=358. The CSS declares `--thd-screen-lg: 64rem`; behaviour at that width was not measured.

## Iteration Guide

1. Start with white, a 60px `#1868db` announcement bar and a centred Charlie Display 700 headline in `#101214`.
2. Add a 57px blue pill CTA and a secondary pill.
3. Follow with a wide hero video and a logo wall.
4. Build feature sections as large rounded panels (39–66px) in blue, white or pastel, each with a product screenshot and a circular face bubble.
5. Insert one near-black `#101214` band for security or enterprise.
6. Scale type and spacing fluidly, as the measured fractional values show.
7. Close with a `#e9f2fe` footer with uppercase column headings.
