---
version: alpha
name: Supabase
category: "Backend, Database & DevOps"
description: "Supabase's homepage: a near-white canvas (#fdfdfd) with white cards, near-black headings (#030303) over grey body copy (#696969), a single deep brand green (#0e7e4e) on 9.29px-radius buttons, Manrope headlines at 46px weight 500 and Inter text at 15px."
colors:
  canvas: "#fdfdfd"
  page-largest: "#ffffff"
  ink: "#030303"
  ink-body: "#696969"
  primary: "#0e7e4e"
  on-primary: "#fafcfb"
  brand-deep: "#15593b"
  surface-black: "#000000"
  on-dark-muted: "#ffffff99"
  on-dark-soft: "#ffffffa6"
  hairline: "#00000015"
  input-bg: "#00000004"
  input-border: "#00000025"
typography:
  display:
    fontFamily: Manrope, "Manrope Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 46px
    fontWeight: 500
    lineHeight: 46px
  display-mobile:
    fontFamily: Manrope, "Manrope Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 34px
    fontWeight: 500
    lineHeight: 37.7778px
  heading:
    fontFamily: Manrope, "Manrope Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  subheading:
    fontFamily: Manrope, "Manrope Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 34px
    fontWeight: 600
    lineHeight: 37.7778px
  body:
    fontFamily: Inter, "Inter Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif, Inter, "Helvetica Neue", Helvetica, ui-sans-serif, system-ui, sans-serif
    fontSize: 15px
    fontWeight: 450
    lineHeight: 22.5px
  button:
    fontFamily: Inter, "Inter Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif, Inter, "Helvetica Neue", Helvetica, ui-sans-serif, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  link:
    fontFamily: Inter, "Inter Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif, Inter, "Helvetica Neue", Helvetica, ui-sans-serif, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 450
    lineHeight: 24px
  input:
    fontFamily: Inter, "Inter Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif, Inter, "Helvetica Neue", Helvetica, ui-sans-serif, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 450
    lineHeight: 20px
rounded:
  xs: 2.67px
  sm: 5.33px
  md: 8px
  lg: 8.86px
  cta: 9.29px
  card: 10.67px
  3xl: 15px
  4xl: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 8px 16px
    height: 38px
  button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    borderColor: "{colors.hairline}"
    height: 38px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  text-input:
    backgroundColor: "{colors.input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 8px
    height: 35px
    borderColor: "{colors.input-border}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

The Supabase homepage presents a developer platform as a bright, quiet product board. The hero is left-aligned: the two-line headline "Build in a weekend / Scale to millions" with the second line in the brand green, a short paragraph at the right (Start your project with a Postgres database. Add Authentication, Data APIs, Edge Functions, Realtime Data, Storage, and Vector embeddings.), and two buttons, a green "Start your project" and a white "Request a demo". A floating navigation bar with the logo, Product, Developers, Solutions, Pricing, Docs and Blog, a GitHub star count, "Sign in" and a small green "Start your project" button overlaps the first row of cards in the capture.

Below the hero is a grid of outlined product cards on near-white: Postgres Database (with a checklist: "100% portable", "Built-in Auth with RLS", "Easy to extend"), Authentication, Edge Functions, Storage, Realtime, Vector and Data APIs. Each has a small line icon, a 600-weight name, a grey one-sentence description and a pale illustration: a database glyph, a grid of email-like records in monospace, a wireframe globe, file-type tiles, a cube with partner marks and an API route diagram. A line follows: "Use one or all. Best of breed products. Integrated as a platform." Then a "Trusted by fast-growing companies worldwide" strip of grey logos (Lovable, Mozilla, PwC, Figma, GitHub, Resend, LangChain, 1Password and others), and a product-screenshot section headed "Stay productive and manage your app without leaving the dashboard" with pill tabs (Table Editor, SQL Editor, RLS Policies).

The mood is clean and technical, with generous whitespace and a pale, almost paper-like surface. Colour is used with great restraint: black text, grey text, one green. The tone of the copy is direct and developer-centric, built from short, confident declarative sentences.

## Colors

Values were measured on the live page.

- **Canvas (#fdfdfd)** is the page background and the footer; **page-largest (#ffffff)** is the surface of cards and of white buttons and has the largest DOM area. They differ by a hair, which is how cards separate from the page, together with a hairline border.
- **Ink (#030303)** is the near-black of headings, nav text and button labels. **Ink body (#696969)** is the most-read text colour on the page, used for every descriptive paragraph.
- **Primary (#0e7e4e)** is the brand green of the filled buttons and of the second headline line; **on-primary (#fafcfb)** is the near-white label. **Brand deep (#15593b)** is a darker green seen in text. The site's CSS also defines a brand ramp (for example #fafefd, #8ed2af, #40bf86, #2b825b) plus hsl entries; the lighter greens appear in small in-product buttons.
- **Surface black (#000000)** and dark panels (#0c0f24 and #002533 were measured as small areas) carry dark product visuals; text on them is white at reduced alpha: **on-dark-soft (#ffffffa6)** and **on-dark-muted (#ffffff99)**.
- **Hairline (#00000015)** is the 8 percent black border used on cards and buttons. **Input background (#00000004)** and **input border (#00000025)** are the field styles.

Other hues measured in text (a purple #6b35dc, an amber #b45309) belong to in-product illustration and code, not to the page chrome.

## Typography

Three families: **Manrope** for headlines and card titles, **Inter** for body, buttons and navigation, and **Source Code Pro** for monospace samples. The CSS declares weights through variables including a normal weight of 450 (a variable-font value between regular and medium), medium 500, bold 700 and extra-bold 800.

- **Display:** Manrope 46px, weight 500, line-height 46px (line-height equals font size, so the two lines hug each other). At 390px the headline is **display-mobile** at 34px with a 37.7778px line-height.
- **Subheading:** Manrope 34px, weight 600, line-height 37.7778px, used for section titles; its measured letter-spacing is -0.16px at the 22px size used by the lead line.
- **Heading (card title):** Manrope 16px, weight 600, 24px line-height.
- **Body:** Inter 15px at weight 450, 22.5px line-height, in #696969. **Link** is Inter 16px/450 and **button** Inter 14px/500 with a 20px line-height. **Input** is Inter 14px/450.

Common text sizes by usage on the page are 14px, 15px, 22px, 12px and 16px; 22px is the lead line below the cards ("Use one or all."), in which the first sentence is darker and the remainder grey.

## Layout

Content sits in a centered column with wide left/right margins (the hero text starts at the same left edge as the card grid). The hero is a two-column split with headline left and description right, with the buttons under the headline. The first card row is a 2-1-1 grid (a wide Postgres card, then Authentication and Edge Functions), the second row is four equal cards. Logo strip: two rows of six greyscale logos in an outlined band. The dashboard-preview section is a full-width framed screenshot with its own sidebar.

The CSS defines a base spacing unit (.25rem) and named spacing steps of 8px, 32px and 64px, a 2px spacing scale, and the measured gaps are mostly 8px, then 16px, 4px, 32px, 12px, 20px, 10px, 6px and 24px. Section spacing in the capture is generous; I did not attribute specific gap values to individual cards.

## Elevation & Depth

Depth is almost entirely flat and hairline-based. Cards are white with a 1px 8 percent black outline; buttons carry a stack of very low-opacity shadows: a small drop (rgba(0, 0, 0, 0.04) 0 1px 3px), an inset highlight line (rgba(0, 0, 0, 0.027) 0 1px 0 inset) and a 1px inset ring (rgba(0, 0, 0, 0.04) and 0.067), which gives them a slight pressed-paper look. A light ring (a translucent white 1px outline) appears around dark panel items, and a larger Tailwind-style shadow (rgba(0, 0, 0, 0.1) 0 10px 15px -3px and 0 4px 6px -4px) is also measured on the page, on elements I did not individually identify. The navigation bar floats over content in the capture; a near-opaque white (#ffffffe6) background and a 16px blur variable exist in the page data, but I did not confirm they belong to the bar.

## Shapes

Radii are many and slightly fractional because they derive from rem-based tokens: 2.67px (xs), 5.33px (sm), 8px (md), 8.86px (lg), 9.29px (cta, the buttons), 10.67px (card, the most frequent), 15px, 16px and a pill. The page's CSS defines radius tokens of .333333rem, .5rem and .666667rem alongside px tokens of 2px, 4px, 8px and 16px. Buttons and cards share a soft, mid-size rounding; pills are used for the tab chips (Table Editor, SQL Editor, RLS Policies) and the circular elements. There are no sharp 0px interactive corners.

## Components

**Primary button.** 38px high, padding 8px 16px, 9.29px radius, #0e7e4e fill, #fafcfb label at Inter 14px/500, with a faint top-lit gradient overlay and the stacked low-opacity shadows described above. Hover shifts the fill to a slightly darker green.

**Secondary button.** White (#ffffff) fill, #030303 label, hairline border and the same shadow stack; hover adds a faint black tint (about 3 percent). "Request a demo", "View on GitHub" and "Join us on Discord" use it.

**Navigation bar.** A floating strip with small 26px-high buttons: "Sign in" in the secondary style and "Start your project" in the primary style, plus text links at Inter 16px/450.

**Text input.** 35px high, 8px radius, 8px padding, background #00000004 and border #00000025, Inter 14px.

**Product card.** White, 10.67px radius, hairline border, icon + Manrope title + grey text, with illustration at bottom.

**Tab chips.** Pills with a hairline border; the active tab has a darker outline.

**Footer.** On #fdfdfd; includes "We protect your data." with "More on Security" and compliance mentions (SOC2 Type 2).

## Design System Architecture

Supabase publishes its design system at https://supabase.com/design-system. The page describes colours, icons, a "simple extensible theming system", typography and UI patterns (forms, tables, navigation, modality, empty states), with components split into atoms and fragments, and states that it is built on Radix UI, shadcn/ui and Tailwind CSS and inspired by Radix, shadcn/ui and Geist. The shared React library lives in the repository at https://github.com/supabase/supabase/tree/master/packages/ui, described as built on Radix UI primitives and shadcn/ui, styled with Tailwind CSS, used across Supabase apps, using semantic colour pairs such as bg-card text-card-foreground, and configured through OKLCH inputs (--hue, --chroma, --surface, --foreground-lightness, --contrast). Brand rules are at https://supabase.com/brand-assets: the logos are provided in SVG for light and dark themes, they may not be modified, and the wordmark may not use other colours.

The shipped CSS matches that description: Tailwind variable names (--color-neutral-*, --spacing, --radius-*, --tw-*), a brand ramp (--color-brand-100 through 1100), Radix-style colour scale variables (--colors-slate-light-alpha-200, --colors-gray-dark-300), semantic variables such as --border, --muted, --popover, --control and --info-foreground computed with relative oklch colour syntax, font variables (--font-family-body, --font-mono) and weight variables.

## Do's and Don'ts

Do keep the page near-white and let cards separate by hairline borders rather than shadow.
Do use #030303 for headings and #696969 for descriptive copy.
Do reserve #0e7e4e for the primary action and the headline's second line.
Do set headlines in Manrope and everything else in Inter at weight 450 for text.
Do keep buttons at 38px with the stacked ultra-light shadows.

Don't add extra accent colours to the chrome; purple and amber belong to illustration.
Don't use heavy shadows on cards.
Don't alter or recolour the logo or wordmark.
Don't use pill-shaped primary buttons; pills are for tabs.
Don't set body text in pure black; it is the heading colour only.

## Responsive Behavior

The extraction measured 1280px and 390px for the headline: at the narrow width the Manrope display drops from 46px to 34px with a 37.7778px line-height. The page uses Tailwind-based variables, but I did not measure card reflow, nav collapse or breakpoints, so they are not recorded here. In the capture the nav is a floating bar overlapping content at desktop width.


## Iteration Guide

1. Start with canvas, page-largest, ink, ink-body, primary and on-primary.
2. Set type: Manrope 46px/500 headlines, Inter 15px/450 body, Inter 14px/500 buttons.
3. Build buttons at 38px with a 9.29px radius and the stacked light shadows.
4. Build cards at 10.67px radius, white fill, hairline border, with a line icon and a 16px Manrope title.
5. Add dark panels only for product visuals, using white at 60 to 65 percent alpha for secondary text.
6. Keep any new colour in the brand ramp or the neutral ramps exposed by the site's CSS.
