---
version: alpha
name: Binance
category: "Fintech & Crypto"
description: "Binance homepage system: near-black #181a20 canvas, #eaecef text, a single signal-yellow #fcd535 button with #202630 label and 8px radius, deeper #f0b90b yellow for numerals, BinanceNova at 72px/700 hero and 40px/600 headings, 20px-radius cool-grey cards."

colors:
  canvas: "#181a20"
  ink: "#eaecef"
  primary: "#fcd535"
  on-primary: "#202630"
  surface-raised: "#1e2329"
  surface-card: "#29313d"
  ink-secondary: "#929aa5"
  ink-tertiary: "#707a8a"
  brand-yellow: "#f0b90b"
  sell-red: "#f6465d"
  hairline: "#2b3139"
typography:
  display:
    fontFamily: BinanceNova, Arial, sans-serif
    fontSize: 72px
    fontWeight: 700
    lineHeight: 76px
  display-mobile:
    fontFamily: BinanceNova, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: BinanceNova, Arial, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  subheading:
    fontFamily: BinanceNova, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button:
    fontFamily: BinanceNova, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 20px
  4xl: 24px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 32px
    height: 48px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 24px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    height: 24px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    padding: 12px 24px 20px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 64px 24px
---

## Overview

Binance's homepage is a near-black trading terminal dressed as a landing page. The canvas is `{colors.canvas}` (#181a20), text is a cool off-white `{colors.ink}` (#eaecef), and a single saturated yellow carries every conversion moment: the Sign Up button is `{colors.primary}` (#fcd535) with dark `{colors.on-primary}` (#202630) text, while the hero counter, the "SAFU" headline word and the headline statistics are set in the slightly deeper brand yellow `{colors.brand-yellow}` (#f0b90b). Everything else is grey-blue neutrals. The only other saturated color on the page is the red `{colors.sell-red}` (#f6465d) used for falling prices, with green for rising ones (a measured `--color-Buy` of #2ebd85 in the shipped CSS).

The page reads as three stacked acts, which is what the full-page capture shows:

1. A hero with a giant count of users ("333,037,029 USERS TRUST US"), the line "The World's Leading Cryptocurrency Exchange", two award laurels ("No.1 Customer Assets", "No.1 Trading Volume"), an email/phone sign-up field with a yellow Sign Up button, and Google / Apple / QR social-login chips. On the right sits a live market card (tabs Popular / New Listing / Stocks / tCommodities, rows for BTC, ETH, BNB, SPCXB, NVDAB with price and 24h change) and a news card with four headlines.
2. A trust section: "FUNDS ARE SAFU" in large uppercase with the word SAFU in yellow, a reserve figure ("15,000 BTC"), and two yellow stat numerals, followed by three photographic video tiles of people celebrating (beach, dinner table, a vehicle).
3. An app-download section: a phone mock-up on the left, "Trade on the go. Anywhere, anytime." with a QR code and platform icons (MacOS, Windows, Linux) and Mobile / Desktop tabs.

The voice is declarative and numerical. Headlines are claims (a user count, a fund balance), not metaphors; supporting copy is short factual statements ("Your security is our priority"). The microcopy on controls is two words or fewer: "Log In", "Sign Up", "View All", "More".

Binance publishes no public design-system site that we could open. This document is therefore built from the measured live site and the CSS custom properties its production stylesheet ships; see Design System Architecture.

## Colors

The palette is a dark-mode ladder of blue-tinted greys plus the yellow accent. All values below are measured from the live homepage or from its shipped `:root` variables.

### Brand

- **Signal yellow** `{colors.primary}` (#fcd535) is the primary button fill (the shipped variable `--color-BtnBg`). It is the one color allowed to sit behind a button label.
- **Brand yellow** `{colors.brand-yellow}` (#f0b90b) is the shipped `--color-PrimaryYellow` and `--color-TextLink`. It colors the hero counter, the emphasized headline word and statistics, and link text. It is a text/accent color; the lighter #fcd535 is the surface color.
- **On-primary** `{colors.on-primary}` (#202630) is the label color on yellow, shipped as `--color-TextOnYellow`.

### Surfaces

- **Canvas** `{colors.canvas}` (#181a20) is the page background (`--color-BasicBg`), confirmed on capture pixels.
- **Raised** `{colors.surface-raised}` (#1e2329) is the first elevation step used by panels and rows.
- **Card** `{colors.surface-card}` (#29313d) is the fill of the market and news cards and inputs (`--color-Input`, `--color-Vessel`, `--color-ContainerBg` all share this value).
- **Hairline** `{colors.hairline}` (#2b3139) is the measured border color. The stylesheet also ships `--color-Line` #333b47 for dividers.
- The shipped CSS also defines deeper trading-surface backgrounds (`--color-SecondaryBg` / `--color-TradeBg` #0b0e11) used behind order books; the marketing page itself does not use them as canvas.

### Text

- **Ink** `{colors.ink}` (#eaecef) is body and headline text (`--color-PrimaryText`).
- **Secondary** `{colors.ink-secondary}` (#929aa5) is for supporting labels (`--color-SecondaryText`), e.g. ticker names beside symbols.
- **Tertiary** `{colors.ink-tertiary}` (#707a8a) is for the quietest captions and inactive icons (`--color-TertiaryText`, `--color-IconNormal`).

### Market semantics

- **Sell / error** `{colors.sell-red}` (#f6465d) is shipped as `--color-Sell`, `--color-TextSell` and `--color-Error`; the capture shows it on negative 24h changes.
- **Buy / success** is `--color-Buy` #2ebd85 in the stylesheet. Binance keeps red and green strictly for price direction and status, never as brand color.

### Color rules observed

- Yellow is rationed: one button fill color, one text accent. No gradients on the marketing page.
- Neutrals are blue-shifted (cool), never pure grey or pure black, which keeps the dark canvas from looking flat.
- Alpha tints exist for state backgrounds (the stylesheet ships 10% and 20% alpha yellow, red and green washes), used behind badges and error messages rather than for decoration.

## Typography

The measured family is **BinanceNova**, with `Arial, sans-serif` as the fallback; the font-face declarations list weights 400, 500 and a 600-800 variable range. The stylesheet also references a second family, BinancePlex, which we did not see on the measured elements. BinanceNova is proprietary and no public download was found, so substitutes are needed (below).

| Role | Token | Size / line | Weight |
| --- | --- | --- | --- |
| Hero counter (h1) | `{typography.display}` | 72px / 76px | 700 |
| Hero on mobile (390px) | `{typography.display-mobile}` | 32px / 40px | 700 |
| Section heading (h2) | `{typography.heading}` | 40px / 48px | 600 |
| Card heading (h3) | `{typography.subheading}` | 16px / 24px | 600 |
| Button and body | `{typography.button}` | 16px / 24px | 500 |

Observations:

- The hero is uppercase, set in the 72px 700 style, with the number and the words stacked on separate lines; the headline word "SAFU" repeats the pattern in yellow. Weight, not letter-spacing, provides emphasis; letter-spacing is `normal` on every measured role.
- The scale is short. There are effectively five steps in use, and the jump from 16px to 40px to 72px is deliberate: little mid-sized display text.
- Body text is 16px at weight 400 on the root; buttons step to 500.
- Numerals in the ticker card are right-aligned columns of prices and percentages, which is where a tabular-figure face matters.

### Font substitutes

If BinanceNova is unavailable use `Inter` or `IBM Plex Sans` at the same weights; keep Arial as the last fallback to mirror the production stack. Tabular figures (`font-variant-numeric: tabular-nums`) are recommended for price columns.

## Layout

- The measured desktop viewport is 1280px wide. Content aligns to a left margin of roughly 30px at the capture scale with the hero split into a text column on the left and a stacked card column on the right.
- Section rhythm is generous: large empty bands (the capture shows roughly 100px or more of canvas) separate the hero, the trust section and the app section, so each act reads alone.
- The nav is a single dark bar: the BINANCE wordmark with its yellow diamond mark, text links with chevrons (Buy Crypto, Markets, Trade, Futures, Earn, Square, Institutional, AI, More), then a right cluster of search, Log In (grey), Sign Up (yellow), a download icon, a globe and a theme toggle. Nav padding is `0px 24px`.
- The footer uses `64px 24px` padding on the canvas color.
- Spacing tokens measured on the site run 2, 4, 6, 7, 8, 10, 11, 12, 16 and 20px (`{spacing.s1}` to `{spacing.s10}`): a dense scale suited to a data-heavy product. Cards pad `12px 24px 20px`.
- The market card and news card are stacked vertically in the right column with a gap between them of roughly the spacing of the card padding; the three video tiles share one row at equal width.

## Elevation & Depth

Binance builds depth with fill steps, not shadows. The ladder is canvas `{colors.canvas}` to raised `{colors.surface-raised}` to card `{colors.surface-card}`; each step is a few lightness points lighter. The shipped stylesheet defines named shadow variables (`--shadow-shadow1`, `--shadow-shadow2`) and a few explicit shadows such as `0px 8px 8px 0px rgba(24,26,32,.08)`, but on the dark marketing canvas the cards on the capture show no visible drop shadow.

Focus and selected states use inset rings (the stylesheet shows `inset 0 0 0 1px` on inputs with the shipped input-line color, and a 1.5px inset ring in the primary text color on selected items) rather than outer glows. Hairlines at `{colors.hairline}` separate rows inside cards.

## Shapes

The measured radii form a ladder: 4, 6, 8, 10, 12, 16, 20 and 24px (`{rounded.xs}` to `{rounded.4xl}`).

- **Buttons**: `{rounded.md}` (8px) on the 48px hero Sign Up; the compact nav Sign Up and Log In buttons measure 32px tall with a 4px radius.
- **Cards**: `{rounded.3xl}` (20px) on the large market and news cards.
- **Images**: the video tiles on the capture are only gently rounded; the QR frame uses a larger radius.
- Buttons are never pills. Rectangular-with-soft-corners is the pattern.

## Components

### Button, primary

`{components.button-primary}`: yellow `{colors.primary}` fill, `{colors.on-primary}` label at 16px / 500, `{rounded.md}` radius, 48px height, `0px 32px` padding. Hover is a pure opacity drop (the measured hover moves opacity from 1 to 0.8; the nav Log In button behaves the same way) with no color shift.

### Button, compact

Nav Sign Up is the same yellow at 32px height with a 4px radius; nav Log In is a grey fill (`#333b47`, measured) with off-white text. Two weights of emphasis, one shape.

### Text input

`{components.text-input}`: transparent-on-dark field, 16px text. In the hero the email/phone input sits directly beside the Sign Up button, forming a single row; placeholder text is quiet grey ("Email/Phone number").

### Card

`{components.card}`: `{colors.surface-card}` fill, `{rounded.3xl}` radius, padding `12px 24px 20px`. The market card contains a tab row with a yellow underline on the active tab, then rows of coin icon, ticker, secondary-grey name, right-aligned price and a colored change figure. The news card repeats the card with a title row and a "View All News" link in muted grey.

### Navigation

`{components.nav}`: canvas-colored bar, off-white links with small chevrons for menus, `0px 24px` padding. The wordmark is the one place yellow appears in the left half of the bar.

### Footer

`{components.footer}`: canvas fill, `64px 24px` padding.

### Social-login chips

Square dark tiles with Google, Apple and QR glyphs sit under the hero form, separated by a thin divider before the QR chip.

### Stat blocks

Large yellow numerals over an off-white label ("7,488,223 Users helped", "$229,433,449 Funds recovered"). They are not cards: no fill, no border.

## Imagery & Art Direction

What the capture shows, section by section:

- **Hero**: no photography. The hero is type and data only: a giant counter, a tagline, award laurels in gold line-art, and live market rows. The "image" is the numbers.
- **Coin glyphs**: each market row leads with a round coin badge (orange for BTC, indigo for ETH, yellow for BNB, black for SPCXB, green for NVDAB). These are the only multi-color elements on the dark canvas and they are small, circular and uniform in size.
- **Trust videos**: three equal-width photographic tiles with a centered white play button. The photography is warm, candid and documentary: groups of people laughing or celebrating outdoors at golden-hour light. It deliberately contrasts with the cool dark UI around it.
- **Partner recognitions**: Forbes and Fortune Crypto 100 marks appear as small greyscale logos with one-line captions in muted text.
- **App section**: a phone mock-up showing the product itself in dark mode with a green and red palette, and a white-framed QR code, which is the only white block on the page and therefore the strongest contrast point.

Icons are simple monoline glyphs in off-white (search, download, globe, theme toggle, Google, Apple, platform logos). Chevrons next to nav items indicate menus.

## Interaction States

Only the following were measured on the live page, and nothing else is claimed:

- Buttons (the nav Log In and Sign Up): on hover the background, text color and border stay the same and opacity moves from 1 to 0.8.
- Nav menu items carry chevrons, which signal dropdowns.
- The market card's tab row marks the active tab with a short yellow underline.
- Links in muted grey ("View All", "View All News") end with a chevron glyph.
- The Mobile / Desktop toggle in the app section uses the same underline treatment for the active choice.

## Content Patterns

- Numbers lead: counters, reserve balances and recovered-fund totals appear before their label.
- Labels are short noun phrases: "Users helped", "Funds recovered".
- Uppercase is reserved for hero claims ("USERS TRUST US", "FUNDS ARE SAFU"); everything else uses sentence case.
- Headlines that need emphasis recolor a single word to yellow instead of changing size.
- Section headings in the lower half ("Trade on the go. Anywhere, anytime.") switch to sentence case at the 40px / 600 heading step.
- Ticker rows always follow the same order: icon, symbol, name in secondary grey, price, change.

## Design System Architecture

No public Binance design-system site, token package or brand-guideline page was found: the brand URL we tried returned 404 and the Binance GitHub organization contains API connectors and documentation, not UI code. The system is therefore documented as it ships.

The production stylesheet exposes a flat set of semantic CSS custom properties on `:root` with a `--color-` prefix and role names: `BasicBg`, `SecondaryBg`, `CardBg`, `Input`, `InputLine`, `Line`, `PrimaryText`, `SecondaryText`, `TertiaryText`, `BtnBg`, `PrimaryYellow`, `Buy`, `Sell`, `Error`, `Success`, plus alpha-wash variables for yellow, red and green. The names describe job rather than hue, which is what makes the same components switch to a light theme (the nav has a theme toggle). Tailwind's `--tw-*` ring and shadow variables are also present on `:root`, indicating utility-class styling layered on top of these tokens.

Practical consequences for anyone reproducing the look:

- Define colors by role, not by value, and keep one place where the dark and light maps diverge.
- Keep the yellow tied to two roles: button fill and emphasis text.
- Keep red and green bound to price direction and status only.

## Do's and Don'ts

Do:
- Use `{colors.primary}` as the single button fill and `{colors.on-primary}` for its label.
- Put giant numbers and claims in 72px / 700 uppercase on the dark canvas.
- Step depth with the fills `{colors.canvas}`, `{colors.surface-raised}`, `{colors.surface-card}`.
- Right-align numeric columns and color only the change figure.
- Keep corner radius soft but not pill-shaped: 8px for buttons, 20px for cards.

Don't:
- Don't use yellow for large background fields; it is an accent on the dark canvas.
- Don't color prices green or red outside of direction semantics.
- Don't add drop shadows to cards on the dark canvas.
- Don't mix more than the short type scale; avoid inventing intermediate display sizes.
- Don't switch the button hover to a new color; use the opacity change.

## Responsive Behavior

The extractor measured the mobile viewport at 390px, and the only measured change is typographic: the hero counter drops from 72px / 76px to `{typography.display-mobile}` (32px / 40px), still weight 700. Mobile layout beyond that (column stacking, nav collapse) was not measured and is not specified here. Body size stays at 16px. Primary buttons keep their 48px height on desktop; if you adapt them for touch, keep that height rather than shrinking to the 32px nav size.

## Iteration Guide

1. Start from the canvas `{colors.canvas}` and ink `{colors.ink}`; add yellow last and only on the primary action.
2. Build the type scale from the five measured steps; do not add new sizes without measuring.
3. When adding a surface, choose one of the three fills; do not invent a fourth.
4. Check any new number-heavy component for right alignment and tabular figures.
5. Re-measure against the live page before changing a value: every token here traces to the captured homepage or to its shipped `:root` variables (see `SOURCES.json`).
6. Treat the BinanceNova substitute as a placeholder and verify line-height at 72px, where fallback metrics differ most.
