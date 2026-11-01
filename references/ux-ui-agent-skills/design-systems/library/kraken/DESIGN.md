---
version: alpha
name: Kraken
category: "Fintech & Crypto"
description: 'Kraken''s marketing site: a cool lavender-white #f6f5f9 canvas with near-black #101114 headings, a single owned purple #7132f5 on 12px-radius buttons, Kraken-Brand display type at 48px, Kraken-Product UI type, and large rounded dark panels (#191322, #302744) holding product screenshots.'
colors:
  canvas: "#f6f5f9"
  ink-secondary: "#686b82"
  primary: "#7132f5"
  on-primary: "#ffffff"
  surface-plum: "#302744"
  ink-tertiary: "#9497a9"
  ink: "#101114"
  ink-inverse: "#f5f5f5"
  hairline: "#686b823d"
  primary-hover: "#5b1ecf"
  surface-night: "#191322"
  footer-border: "#686b821f"
  surface-void: "#0b041a"
  negative: "#d11d45"
  primary-tint: "#855bfb29"
typography:
  display:
    fontFamily: Kraken-Brand, "IBM Plex Sans", Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
  display-mobile:
    fontFamily: Kraken-Brand, "IBM Plex Sans", Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  heading:
    fontFamily: Kraken-Brand, "IBM Plex Sans", Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 44px
  body:
    fontFamily: Kraken-Product, "IBM Plex Sans", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: Kraken-Product, "IBM Plex Sans", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
  nav:
    fontFamily: Kraken-Product, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Kraken-Product, "IBM Plex Sans", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
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
  s8: 13px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 13px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
    height: 36px
  nav:
    textColor: "{colors.ink}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    padding: 0px 2px 0px 0px
    height: 44px
  card:
    backgroundColor: "{colors.surface-night}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 56px 24px 0px
  footer:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    padding: 40px 0px 0px
    borderColor: "{colors.footer-border}"
  button-hero:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 16px
    height: 52px
  button-tertiary:
    backgroundColor: "{colors.primary-tint}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    height: 36px
---

# Kraken

## Overview

Kraken (www.kraken.com; services operated by Payward, Inc., per the footer legal line) is a crypto and stocks exchange. Its home page opens with the headline "Own the power of your money" and sells four things: Kraken Pro (a trading terminal with 600+ crypto pairs and 11,000+ stocks and ETFs), the Kraken app ("Crypto and stocks made easy"), Kraken Wallet (self-custody for DeFi) and Kraken CLI for AI agents. The design language is "trust through restraint": a quiet lavender-white page, a single owned purple, and very large dark rounded panels that carry the product screenshots and phone mockups.

The captured page (1280px) reads top to bottom as:
1. A white bar with the purple "kraken by PAYWARD" wordmark at left, links (Individuals, Businesses, Affiliates, VIP, Markets, About) and right-aligned controls: a language pill ("EN" with a flag), a search field with a "/" shortcut chip, a purple-tinted "Log in" button and a solid purple "Sign up".
2. A hero on `{colors.canvas}` (#f6f5f9): the 48px headline, a 20px subline ("Crypto, stocks, futures, and more - trusted by millions worldwide"), an email field with a focus ring in purple and a purple "Try Kraken" button, a hairline divider with "or sign up with", and two circular Apple and Google buttons. Under it, three proof points: "Since 2011", "$2T+", and a serif-set Forbes wordmark ("Most popular crypto exchange 2026").
3. A rounded dark panel (deep violet glow, near-black) with a small "PRO" badge: headline "The command center for active traders", copy, a purple "Sign up now" button and a large screenshot of the trading terminal (order form, order book, candlestick chart) cropped at the panel's lower edge.
4. A charcoal panel: the wordmark, "Crypto and stocks made easy", copy, "Get Kraken", and three overlapping phone mockups showing a portfolio, a watchlist and a buy flow.
5. A third panel with a "WALLET" badge, "Secure your crypto with self custody" and a white "Try Wallet" button over more phone mockups.

**Key characteristics**
- Light lavender canvas `{colors.canvas}` that alternates with deep dark panels: `{colors.surface-night}` (#191322), `{colors.surface-plum}` (#302744), `{colors.surface-void}` (#0b041a) and `{colors.ink}` (#101114).
- One brand colour: `{colors.primary}` (#7132f5) with hover `{colors.primary-hover}` (#5b1ecf).
- 12px corners on every button; 20px on large cards; 24px on panels; pills for icon buttons and chips.
- Two custom families: Kraken-Brand for display and Kraken-Product for UI, with IBM Plex Sans as the stated fallback.
- Product UI screenshots (dense data in monospace) are the imagery.

### Imagery, art direction and voice
- Imagery is product UI in dark mode: a full trading terminal (order form, order book with red and green ladders, candlestick chart with a drawing toolbar) and three-phone stacks showing balances, watchlists (Bitcoin, Ethereum with sparklines) and a buy keypad ("$1").
- The 2019 rebrand introduced adventure-themed illustration; the current home page leans instead on interface imagery, with the squid-like logomark as the only mascot.
- Customer proof is numeric and short: "Since 2011", "$2T+", "Most popular crypto exchange 2026".
- Voice is direct and plain-English: "Own the power of your money", "Crypto and stocks made easy", "Secure your crypto with self custody", "Sign up now", "Get Kraken".
- Legal fine print is present at 12px in grey (equities availability note), which is why 12px dominates character counts.
- Density: centred, low-copy panels over a dense data screenshot; the density sits in the images, not the layout.

## Colors

All colours below are measured on the home page (desktop capture) or listed in its shipped CSS.

### Surfaces
| Token | Hex | Role |
|---|---|---|
| `canvas` | #f6f5f9 | page background (largest area, about 7,000 weight) |
| `on-primary` | #ffffff | white header, footer, white buttons on dark, text on purple |
| `surface-plum` | #302744 | violet panel and glow areas |
| `surface-night` | #191322 | dark card background (the "Your agent can trade now" card) |
| `surface-void` | #0b041a | deepest panel tone |
| `primary-tint` | #855bfb29 | the 16% purple tint behind the "Log in" button |

### Text
| Token | Hex | Role |
|---|---|---|
| `ink` | #101114 | headings, nav and footer text, input text; also a dark panel fill |
| `ink-secondary` | #686b82 | body copy and captions (most-read colour, about 2,550 characters) |
| `ink-tertiary` | #9497a9 | secondary captions on light and dark surfaces |
| `ink-inverse` | #f5f5f5 | soft white text on dark panels |
| `negative` | #d11d45 | loss and error text in market data |
| `primary` | #7132f5 | link and accent text ("Log in") |

On role assignment: the generator proposed #686b82 as `ink` because it is the most-read colour. The headline, nav, footer and input colour in the capture is #101114, so it is `ink` here and #686b82 became `ink-secondary` (both measured).

### Action
- `primary` #7132f5 fills every primary button (Sign up, Try Kraken, Sign up now, Create account, Get Kraken) with `on-primary` white text.
- `primary-hover` #5b1ecf is the hover fill.
- The "Log in" button uses a 16% purple tint (`primary-tint`) with purple text.

### Borders
- `hairline` #686b823d (secondary ink at 24%): input and divider lines; `footer-border` #686b821f at 12% for the footer's top rule.
- Other measured borders: #747775, #d3d3d3 and #dedee5 on third-party sign-in buttons and soft dividers.

### Colour rules
- Purple is the only chromatic UI colour; keep red and green to market data only.
- Panels are dark and the page is light: do not mix a light card inside a dark panel unless it is a product mockup.
- Keep text pairings: `ink` on canvas, white or `ink-inverse` on panels.

## Typography

Kraken ships its own typefaces: Kraken-Brand (weights 400 and 500) for display and brand moments, Kraken-Product (400, 500, 600, 700) for interface text, and Kraken-Mono (500) for data, plus a serif, Financier Display, for one wordmark. The font stacks fall back to IBM Plex Sans, then Helvetica and Arial.

| Token | Font | Size | Weight | Line height |
|---|---|---|---|---|
| `display` | Kraken-Brand | 48px | 400 | 56px |
| `display-mobile` | Kraken-Brand | 32px | 400 | 40px |
| `heading` | Kraken-Brand | 36px | 400 | 44px |
| `body` | Kraken-Product | 12px | 400 | 16px |
| `button` | Kraken-Product | 16px | 500 | 22px |
| `button-secondary` | Kraken-Product | 14px | 500 | 20px |
| `nav` | Kraken-Product | 14px | 400 | 24px |

- Kraken-Product accounts for about 5,700 characters on the page, Kraken-Brand about 340, Kraken-Mono about 120 and Financier Display about 40.
- Sizes by character count: 12px (most, because of disclosures and terminal data), 14px, 20px, 16px, 36px, 18px, 24px, 58px, 48px.
- Weights: 400 (about 5,500 characters), 500 (about 570), 700 (about 90).
- The site's design-system variables (`--fontFamily-ds-brand1` etc.) define a Brand scale with weight 700, large sizes (up to 10rem) and -2.5px tracking; the headings measured on this page use weight 400 at 48px and 36px with no letter-spacing, so the dramatic Brand scale is reserved for other surfaces.
- Display headings are centred on the home page.

### Font substitutes
Kraken-Brand and Kraken-Product are proprietary. IBM Plex Sans (the stated fallback) is the closest free substitute at weight 400 for display; use IBM Plex Mono for Kraken-Mono data.

## Layout

- Desktop width 1280px; content is centred in a narrow column for hero copy and widens for panels, which run nearly edge to edge with about 12px margins and 24px corners.
- Panels stack vertically with small gaps between them, each one a full-height "chapter" containing a badge or wordmark, a centred headline, centred copy, one button and a product image bleeding off the bottom edge.
- Proof points are a three-column centred row with a large number and a small grey caption.
- The header is about 48px tall and uses 14px links with 24px line height; its two right buttons are 36px high.
- Measured gaps: 12px (most), 8px, 4px, 16px, 6px, 40px, 24px; paddings: 16px (most), 24px, 8px, 20px, 12px, 15px, 10px, 56px, 48px.
- Dark cards use asymmetric padding such as 56px 24px 0px, leaving the image to run to the bottom edge.
- The footer is white with a 1px top border at `{colors.footer-border}` and 40px top padding.

## Elevation & Depth

- Most depth is tonal: light lavender page, white header, dark panels with a violet glow behind the content.
- Measured shadows are minimal: `rgba(16, 24, 40, 0.04) 0px 1px 2px` and `0px 1px 4px` for small controls, a 1px inset ring `rgba(133, 91, 251, 0.16) inset` on tinted purple elements, and a large `rgb(0,0,0) 0px 4px 60px` shadow around product mockups.
- Focus: the email field shows a purple outline ring; the CSS also defines a 3px blue-grey ring (`rgba(59, 130, 246, 0.5)`) in a utility shadow.
- Phone and terminal mockups carry real UI dark-mode shadows and bezels; they supply the depth rather than the page chrome.
- A subtle blurred "glass" surface (`--surface-glass-scrim-blur: 28px` in the CSS) exists for overlays.

## Shapes

| Token | Value | Use |
|---|---|---|
| `xs` | 8px | small chips |
| `sm` | 12px | all buttons, the search field and tabs container (the most-used radius) |
| `md` | 16px | cards inside panels |
| `lg` | 20px | large dark cards (measured 626px tall cards) |
| `xl` | 24px | the big chapter panels |
| `pill` | 9999px | language selector, circular sign-in buttons (also 50% circles) |

Buttons stop at 12px; pills are reserved for chips and icon buttons. The shipped variables define badges at 12px (`--border-radius-ds-badge-lg`) and tab containers at 12px.

## Components

### Buttons
- **button-primary**: `{colors.primary}` fill, white text, Kraken-Product 16px/500, radius 12px, padding 13px 16px, height 48px; hover `{colors.primary-hover}`.
- **button-hero**: same styling at 52px high with 15px 16px padding ("Sign up now", "Get Kraken").
- **button-secondary**: the compact header "Sign up": 14px/500, padding 8px 12px, height 36px.
- **button-tertiary**: the "Log in" button, `{colors.primary-tint}` fill with `{colors.primary}` text, 12px radius, 36px high.
- A white variant on dark panels ("Try Wallet") shows dark text on white, visible in the capture.
- The design-system variables show border widths of 0px on all button variants: buttons are fills, not outlines.

### Email sign-up field
44px-high field, 14px/500 `{colors.ink}` text, a visible purple focus ring on the home page, paired with a purple button of equal height beside it.

### Header controls
Language pill with flag, search field with slash-key chip (hover fill `rgba(148,151,169,0.08)` to 0.12, radius 12px, 36px high), nav links at 14px with 80% opacity on hover.

### Dark cards and panels
`{colors.surface-night}` fill, 20px radius, padding 56px 24px 0, white headline, `ink-secondary` copy and a purple accent (#9d82fe is used for small highlights).

### Badges
Small labels with the brand mark ("PRO", "WALLET") above panel headlines, set as a light box with dark capitals beside the logomark.

### Proof points
Large 24px-ish numerals or serif wordmark, with a 12px grey caption.

### Footer
White background, `{colors.ink}` links, `{colors.ink-secondary}` legal text at 12px, a 1px top border.

## Design System Architecture

No public Kraken design system, token package or brand-guideline page was found. The press-kit URL I tried returned 404. A 2019 blog post, "Kraken rebranding - do you like it?" (https://blog.kraken.com/news/kraken-rebranding-do-you-like-it), records the shift from blue to a bolder colour, with adventure-themed illustration and the aim to feel "approachable, streamlined, easy-to-consume, and more cool and fun"; it gives no hex values.

The de-facto system can be read from the shipped CSS (about 400 custom properties on the home page), which shows an internal design system with a `ds-` prefix:
- Typography tokens named by role and step: `--fontFamily-ds-body15`, `--fontSize-ds-label1`, `--fontWeight-ds-labelMono2`, `--lineHeight-ds-display1` (6rem), `--letterSpacing-ds-display2` (-1px), and the brand scale `--fontSize-ds-brand2` (10rem), `--fontSize-ds-brand4` (3.5rem) with `--letterSpacing-ds-brand1..4` at -2.5px.
- Component-scoped tokens: `--border-radius-ds-badge-lg` (12px), `--border-radius-ds-tabs-container-bg` (12px), `--border-width-ds-button-primary-high-width` (0px), `--spacing-ds-checkbox-focus-lg` (20px).
- Semantic surfaces: `--surface-glass-muted-fg` (#686b82), `--surface-glass-scrim-blur` (28px).
- Button variants are expressed as intent and emphasis: primary, brand, neutral, negative and warning, each with low, medium and high levels.
This naming indicates a token-driven internal system; its values were measured from rendered elements rather than read from a published source.

## Do's and Don'ts

**Do**
- Use `{colors.canvas}` for the page and big dark panels for product storytelling.
- Keep one purple for every primary action, with 12px corners.
- Centre headlines and copy in the panels and end each with a single button.
- Let product screenshots and phone mockups bleed off the panel's bottom edge.
- Use `ink` for headings and `ink-secondary` for body and captions.
- Use small tonal badges (PRO, WALLET) to label a product.
- Keep 12px as the largest button radius.

**Don't**
- Don't use purple for large background fields on the light page; it is for actions and accents.
- Don't make buttons pill-shaped.
- Don't add heavy shadows to UI chrome; keep to 4% shadows.
- Don't use red or green outside market data.
- Don't switch to weight 700 for headings on these pages (the Brand scale is separate).
- Don't put body copy below 12px except legal text.

## Responsive Behavior

- Measured at 1280px and 390px: the h1 drops from 48px/56px to 32px/40px.
- Small-screen header navigation was not measured.
- Dark panels have 24px corners; their mobile layout was not measured.
- Narrow-screen layout of the three proof points was not measured.
- Buttons keep 48px and 52px heights, which suit touch targets; the 36px header buttons should grow to 44px on touch.
- The email field and button sit side by side on desktop; narrow-viewport layout was not measured.

## Iteration Guide

1. Start from `canvas`, `ink` and `ink-secondary`; add `primary` for the action.
2. Set headlines in Kraken-Brand (or IBM Plex Sans) 400 at 48px/56px centred; body in Kraken-Product 12 to 16px.
3. Build buttons at 12px radius, 48px high, purple fill, white 16px/500 text.
4. Create a dark panel with 24px corners using `surface-night`, `surface-plum` and a violet radial glow; place a product image at the bottom.
5. Add a badge above the headline to name the product.
6. Add data views in a monospace face; show gains and losses sparingly.
7. Re-measure with `node web/scripts/extract-tokens.mjs --slug=kraken --force`.
8. Run `node web/scripts/verify-designs.mjs --slug=kraken`.
