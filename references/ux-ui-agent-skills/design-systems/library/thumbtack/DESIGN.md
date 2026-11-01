---
version: alpha
name: Thumbtack
category: "Design Systems"
description: "Thumbtack's home-services marketplace homepage pairs the Rise typeface (weights 400 and 700, variable up to 900) with a deep navy pill CTA (#07344a), a measured cyan accent (#009fd9), white and #fafafa surfaces, 16px-radius photo cards and a 48px display headline at -0.96px tracking, all on the Thumbprint design system's --tp- CSS variables."
colors:
  canvas: "#ffffff"
  page-largest: "#eaf6fa"
  ink: "#676d73"
  primary: "#07344a"
  primary-hover: "#094d6b"
  on-primary: "#b3ebff"
  surface-subtle: "#fafafa"
  ink-strong: "#1f2022"
  ink-heading: "#2f3033"
  accent-cyan: "#009fd9"
  link-brand: "#0175a3"
  hairline: "#d3d4d5"
  surface-quiet: "#f5f6f6"
  surface-quiet-hover: "#eeeff2"
  scrim-photo: "#00000033"
typography:
  display:
    fontFamily: Rise, Avenir, Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 563
    lineHeight: 50.4px
    letterSpacing: "-0.96px"
  display-mobile:
    fontFamily: Rise, Avenir, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 32px
  subheading:
    fontFamily: Rise, Avenir, Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 590
    lineHeight: 26.4px
    letterSpacing: "-0.24px"
  body:
    fontFamily: Rise, Avenir, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: Rise, Avenir, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
  tile-label:
    fontFamily: Rise, Avenir, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14.4px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 8px
  md: 15px
  lg: 16px
  xl: 34px
  2xl: 76px
  3xl: 80px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-quiet:
    backgroundColor: "{colors.surface-quiet}"
    textColor: "{colors.link-brand}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 42px
  button-quiet-hover:
    backgroundColor: "{colors.surface-quiet-hover}"
  photo-tile-label:
    backgroundColor: "{colors.scrim-photo}"
    textColor: "{colors.canvas}"
    typography: "{typography.tile-label}"
    rounded: "{rounded.lg}"
    padding: 16px
    height: 66px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.lg}"
    padding: 32px
---

## Overview

Thumbtack is a marketplace that connects households with local professionals, and the homepage captured here reads like a well-lit showroom rather than a software dashboard. The first screen is a full-bleed photograph of a covered wooden porch with a modern railing and built-in lighting; over it sit a white 48px headline, "For everything home could be.", a short subline, a rounded white search card and three proof points (4.9 rating from 15M+ reviews, 300K+ local pros, 100M+ home projects). Below the hero the page drops to a calm white and #fafafa canvas with large centered headings, a row of service categories with line icons, and four tall photo cards (House Cleaning, Carpet Cleaning, Junk Removal, Pressure Washing) whose labels sit on a translucent dark plate.

The mood is friendly and practical. Copy is short, in plain second-person language: "Describe your project or problem — be as detailed as you'd like!", "No calls or text until you message a pro.", "A job done right—guaranteed." Photography shows people doing real household work (a gloved hand polishing a faucet, a pressure washer on a deck) instead of stock-style smiles. Color is used sparingly: a deep navy for the main action, a cyan accent that highlights a word in a heading ("Your Area."), and neutral grays for everything else.

The extraction describes a page 1280px wide and 5,367px tall at desktop, with a mobile pass at 390px where the display headline shrinks to 28px bold.

## Colors

The page-level canvas is `canvas` #ffffff. The largest measured background area is `page-largest` #eaf6fa, a pale blue tint, and `surface-subtle` #fafafa is the quiet band behind the category carousel. Body copy is `ink` #676d73, the most-read text color; headings and strong labels are `ink-strong` #1f2022 and `ink-heading` #2f3033.

The main action color is `primary` #07344a, a deep navy. It is measured as the fill of the hero "Find a pro" button, whose text is `on-primary` #b3ebff (a pale cyan) and whose hover fill is `primary-hover` #094d6b. The extractor's own primary-button detection landed on the header "Sign up" pill instead (fill #f5f6f6, text #0175a3); that is recorded here as `button-quiet`, with `surface-quiet` #f5f6f6, `link-brand` #0175a3 and hover `surface-quiet-hover` #eeeff2. The role reassignment is deliberate: the capture shows the navy pill as the page's dominant call to action.

`accent-cyan` #009fd9 colors the highlighted word in the "Pros for every project in Your Area." heading and is also the hover color of neutral links in the shipped variables. `hairline` #d3d4d5 is the divider and outline color. `scrim-photo` #00000033 is the translucent dark plate behind white labels on photographs.

Thumbtack's own palette page at thumbtack.com/brand/guidelines/color could not be read (the fetch returned no content), so no brand-guideline claim is made from it. The Thumbprint JavaScript tokens page lists families named Gray, Blue, Indigo, Purple, Green, Red and Yellow in 50-to-950 steps, with the Blue 950 end listed as #07344A, which equals the measured primary. The live page also exposes semantic variables such as `--tp-background-brand-strong`, `--tp-text-neutral-default` and `--tp-border-neutral-default`.

## Typography

The typeface is Rise, with Avenir, Helvetica, Arial and generic sans-serif as fallbacks; the page loads Rise as a variable font spanning weights 100 to 900. The Thumbprint typography page states that Rise is used at weights 400 and 700, that Title components run from size 1 (28–32px responsive) down to size 8, and that body text has three sizes: 16px, 14px and 12px.

Measured on the homepage, `display` is 48px at weight 563, line height 50.4px and letter spacing -0.96px; the same style is used for the h2 "Explore more projects." The mobile h1 is `display-mobile`, 28px bold with 32px line height. `subheading` is 24px at weight 590 with -0.24px tracking (used for "Cost guides" over photography). `body` is 16px regular at 22.4px line height. `button` is 14px bold. `tile-label` is 12px bold uppercase, used on the photo caption chip in the hero corner.

Font substitutes: Rise is the shipped face. If it is unavailable, the declared fallback order is Avenir, Helvetica, Arial; Avenir's geometric humanist shapes are the nearest of those. Intermediate weights like 563 and 590 only render properly with the variable font; static fallbacks will snap to 400 or 700.

## Layout

The page is a vertical stack of full-width bands. The hero is a full-bleed photograph with the headline and search card aligned to the left, and section content below is a centered column with large centered headings above. The category carousel has icon plus label items, a circular back arrow, and a bottom rule in `hairline`. Photo cards are four equal columns with 16px radius and labels bottom-left. A two-column feature block pairs three short value statements with a phone mockup showing the search keyboard.

Spacing tokens measured on the page: 1, 2, 4, 8, 10, 12, 15, 16, 20 and 24px, with 32px card padding. The Thumbprint token page lists a separate scale (4, 8, 12, 16, 20, 24, 32, 48, 64, 96, 128, 256); the frontmatter keeps only measured values.

## Elevation & Depth

Depth is mostly flat. Cards on the white sections are outlined with `hairline` rather than shadowed; the "Get to hire faster." card shows a thin gray border and 16px radius. The search card in the hero is a white rounded rectangle floating over the photo, which provides separation by contrast rather than shadow. Photo labels sit on `scrim-photo`, a 20% black plate. On hover, header text links gain a 3px inset underline in `hairline` (a box-shadow of #d3d4d5 at -3px inset), a shadow-as-border device. No elevation scale is declared in the frontmatter because no box shadow was measured on the primary button or cards.

## Shapes

Radius is a deliberate hierarchy. Buttons are fully rounded: header buttons use `pill` 9999px, and the hero "Find a pro" button is `2xl` 76px at 40px high. Photo tiles and caption plates use `lg` 16px, while `md` 15px, `sm` 8px and `xs` 4px cover inputs, tags and small controls. The Thumbprint corner-radius tokens list 0, 4, 6, 8, 12, 16, 24 and 9999; the page-measured set also includes 34px and 80px for large rounded containers. Category icons in the capture are thin-stroke line icons.

## Components

**button-primary** is the navy "Find a pro" pill: fill #07344a, text #b3ebff, 14px bold Rise, 40px high, 76px radius, with an arrow glyph after the label, hovering to #094d6b. **button-quiet** is the header "Sign up" pill: fill #f5f6f6, brand-blue text #0175a3, 42px high, 20px horizontal padding, hover #eeeff2. The "Log in" button beside it is white with #1f2022 text and the same hover fill.

**photo-tile-label** is the translucent chip with white 12px uppercase text, 16px padding and 16px radius. **card** uses 16px radius and 32px padding with `ink-heading` text. **link** is `ink` body text that darkens on hover. Navigation items ("Explore", "Join as a pro") are `ink` #676d73 and shift to #2f3033 with an underline rule on hover. The hero search is a white card with a magnifier icon, a prompt input, a location input and the primary button.

## Design System Architecture

Thumbtack publishes its system as Thumbprint at https://thumbprint.design, described there as assets for building consistent experiences at Thumbtack, maintained by Thumbtack, Inc. The site lists over 50 components across React, iOS and Android, color/typography/spacing/breakpoint/motion guidelines, design tokens in SCSS, JavaScript, Android and iOS, icons, atomic CSS utilities, and voice-and-tone content guidance. The tokens repository (https://github.com/thumbtack/thumbprint-tokens) describes them as design variables published as JavaScript and SCSS via npm (`@thumbtack/thumbprint-tokens`), Kotlin via JitPack, and Swift via Swift Package Manager.

The dsUrl is real and the live site uses it: the captured page's root variables are prefixed `--tp-` and follow a semantic pattern of role, intent and strength, for example `--tp-background-brand-strong` (#07344A), `--tp-background-brand-strong-hover` (#1f2022), `--tp-text-neutral-default` (#1f2022), `--tp-link-brand-default` (#0175A3) and `--tp-text-on-brand-strong` (#7cdcfd). The documented Sass naming is `$tp-` and the JavaScript naming is camelCase `tpColor…`. Note that the live "Find a pro" button measured hover #094d6b, not the #1f2022 variable, so the variable list should not be read as a literal map of what each component does.

## Do's and Don'ts

Do use the navy `primary` for the single main action on a screen and keep it a pill. Do set headlines in Rise at 48px, tight tracking, over calm white or over a photograph with white text. Do let real photography carry the emotional weight and keep UI chrome neutral. Do use `accent-cyan` only to highlight a word or state.

Don't use the browser default blue links (#0000ee, #551a8b); they are not brand colors. Don't put `ink` #676d73 text over photography; hero text is white there. Don't add drop shadows to cards, since the system separates with hairlines and contrast. Don't mix the quiet #f5f6f6 pill with the navy pill in the same row as equal-priority actions. Don't claim a palette from the brand page that could not be opened.

## Responsive Behavior

At 390px the h1 becomes 28px bold with 32px line height, as measured in the mobile pass. The Thumbprint typography page states that Title size 1 is 28–32px responsive, consistent with that. Only the headline change was measured in the mobile pass; other responsive behavior was not captured and is not described here. Buttons measured at desktop are 40–42px high.

## Iteration Guide

1. Start from `canvas` #ffffff with `ink-strong` headings and `ink` body text.
2. Add one navy `primary` pill per view; hover to `primary-hover`.
3. Use Rise 48px/50.4px, -0.96px for section titles; 16px/22.4px for body.
4. Use 16px radius for cards and photo tiles; pills for buttons.
5. Separate with `hairline` borders, not shadows.
6. Use full-bleed photography of real work, with white text and a `scrim-photo` plate for captions.
7. When unsure of a value, read the `--tp-` variables on the live page rather than inventing one.
