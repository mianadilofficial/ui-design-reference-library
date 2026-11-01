---
version: alpha
name: illoca
category: "Architecture & Interiors"
description: "illoca is an architectural design tool whose marketing site pairs a graph-paper cream page (#eadfc9) and charcoal ink (#373737) with a single cobalt blue (#283f7d, the site's own --color-primary), setting headlines in F37 Analog, body in Graphik Web at 13.3333px, and UI labels in Geist Mono, with radii held to 1.33px and 2.67px."
colors:
  canvas: "#ffffff"
  page-largest: "#eadfc9"
  ink: "#373737"
  primary: "#283f7d"
  on-primary: "#ffffff"
  button-cream: "#fdf8f0"
  on-button-cream: "#212121"
  ink-on-navy: "#fef9f1"
  ink-muted: "#9a9393"
  ink-soft: "#e0d7c5"
  ink-black: "#000000"
  hairline: "#dbdbdb4d"
  nav-text: "#414141"
typography:
  annotation:
    fontFamily: "\"Architect Pro\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
  display-mobile:
    fontFamily: "\"F37 Analog\", sans-serif"
    fontSize: 57.7777px
    fontWeight: 500
    lineHeight: 52px
  heading:
    fontFamily: "\"F37 Analog\", sans-serif"
    fontSize: 68px
    fontWeight: 400
    lineHeight: 68px
  subheading:
    fontFamily: "\"Graphik Web\", sans-serif"
    fontSize: 21.3333px
    fontWeight: 500
    lineHeight: 21.3333px
    letterSpacing: "-0.426666px"
  body:
    fontFamily: "\"Graphik Web\", sans-serif"
    fontSize: 13.3333px
    fontWeight: 400
    lineHeight: 14.6667px
    letterSpacing: "-0.4px"
  button:
    fontFamily: "\"Geist Mono\", monospace"
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 10.6667px
    letterSpacing: "-0.213333px"
  nav:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 1.33px
  sm: 2.67px
  cta: 2.67px
spacing:
  s1: 4px
  s2: 5.33px
  s3: 8px
  s4: 10.67px
  s5: 14.67px
  s6: 16px
  s7: 21.33px
  s8: 26.67px
  s9: 33.33px
  s10: 37.33px
components:
  button-primary:
    backgroundColor: "{colors.button-cream}"
    textColor: "{colors.on-button-cream}"
    typography: "{typography.button}"
    padding: 4px
    height: 76px
    boxShadow: rgba(0, 0, 0, 0.15) 2px 2px 2px 0px
  button-secondary:
    backgroundColor: "{colors.button-cream}"
    textColor: "{colors.on-button-cream}"
    typography: "{typography.button}"
    padding: 4px
    height: 54px
    boxShadow: rgba(0, 0, 0, 0.15) 2px 2px 2px 0px
  link:
    backgroundColor: "{colors.button-cream}"
    textColor: "{colors.on-button-cream}"
    typography: "{typography.button}"
    padding: 4px
    boxShadow: rgba(0, 0, 0, 0.15) 2px 2px 2px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.page-largest}"
---

## Overview

illoca (page title: "illoca – Architectural design at the speed of thought") sells an AI-assisted drawing canvas to architects. The home page behaves like a drafting table: a warm tracing-paper cream (#eadfc9, the background that covers the most area at 4096 weight in the extraction) with a faint graph-paper grid, tiny handwritten annotations in Architect Pro, and one very large illustration of a designer at a desk rendered entirely in cobalt blue and cream. The headline "Design at the speed of thought" is set in F37 Analog in charcoal, flanked by small hand-lettered tags that read "ARCHITECTURAL" and "NOT SOFTWARE".

Everything else is deliberately small. The measured body size is 13.3333px, buttons and navigation are 10.6667px Geist Mono, and the page is scrollable in only 800px of measured height at the first viewport, so density comes from tiny type under a few enormous display moments rather than from many sections. The tone is editorial and slightly playful: copy such as "Get 1,000 starter credits when you sign up today." and "The intelligent canvas that thinks with you, not for you." is short, confident and lowercase-friendly.

Three color temperatures do the work: cream paper, charcoal ink, and cobalt. White (#ffffff) appears only on the floating navigation capsule and on the CTA label. The measured page was captured at 1280px wide on desktop and 390px for the mobile pass.

## Colors

The site declares its own palette in CSS custom properties: `--color-primary: #283f7d`, `--color-black: #373737`, `--color-body: #636363`, `--color-orange: #ec633d`, `--color-error: #e60076`, `--color-light-grey: #9aa0a6`, `--color-border: #424242` and `--color-nav: #fffbf3f2`. Of these, the documented tokens keep only the values that also appear in rendered text or fills.

- **Cobalt (#283f7d, `primary`)** is the brand action color. It is the fill of the "Try for free" capsule in the navigation and in the mobile pass, where the CTA is measured as #283f7d background with #ffffff text. It also fills a 570-weight area further down the page (a full-bleed blue band) with #fef9f1 text on it (`ink-on-navy`).
- **Tracing paper (#eadfc9, `page-largest`)** is the dominant background and also the footer's text color (#eadfc9 on the dark footer).
- **Charcoal (#373737, `ink`)** is the most-read text color, 1305 characters in the measurement, and doubles as the site's `--color-black`. Pure #000000 is reserved for navigation link text.
- **Cream button (#fdf8f0)** with #212121 text is what the extractor detected as the primary CTA on desktop ("Contact us"), with a soft shadow `rgba(0, 0, 0, 0.15) 2px 2px 2px 0px`. It is kept as `button-cream` because it is the desktop-measured button surface.
- **Muted greys** #9a9393 (`ink-muted`) and #e0d7c5 (`ink-soft`) carry captions and secondary labels.
- **Hairline** #dbdbdb4d is the only border color in the extraction used on rendered elements.

Unused-in-render palette entries (`--color-orange` #ec633d, `--color-error` #e60076) are declared by the stylesheet but were not measured on visible elements, so they are not promoted to tokens. Hover colors were not captured (the hover list is empty).

## Typography

Four families plus a symbol face are loaded: F37 Analog (500), Graphik Web (400 and 500), Geist Mono (500), Architect Pro (400) and Architect Pro Symbols. By character count Graphik Web dominates (1909 characters), then Geist Mono (221), F37 Analog (56), the system sans (53) and Architect Pro (40).

- **Headline: F37 Analog.** The section heading measured 68px / 68px at weight 400 on desktop ("Augmented Sketch"). In the 390px mobile pass the hero h1 measured 57.7777px / 52px at weight 500, and the mobile h2 50.5555px. A 98.6666px size is also measured on 30 characters at desktop; the extractor's h1 role on desktop picked up a hidden email link instead, which is why the hero is described here from the mobile measurement and the stylesheet's own scale (`--text-148`, `--text-102`, `--text-96`, `--text-72`, `--text-64`, `--text-56`).
- **Subheading: Graphik Web 500** at 21.3333px with -0.426666px letter spacing.
- **Body: Graphik Web 400** at 13.3333px / 14.6667px and -0.4px tracking. The body copy is negatively tracked throughout; 16px text is tracked at -0.32px.
- **Buttons and labels: Geist Mono 500** at 10.6667px, -0.213333px tracking.
- **Annotations: Architect Pro 400** at 12px, used for the handwritten tags and the email address in the page corner (`annotation`).

No font substitutes are documented by the brand. F37 Analog and Graphik Web are commercial faces; when licensing is not possible, any neo-grotesque sans for headings and a neutral grotesque for body can be used, but that is a stand-in and not a measured choice.

## Layout

The page is built with Tailwind (variables such as `--spacing: .0625rem`, `--container-sm: 24rem`, and a `--text-*` scale are present in the root). Spacing tokens measured on elements run 4px, 5.33px, 8px, 10.67px, 14.67px, 16px, 21.33px, 26.67px, 33.33px and 37.33px; the most common gap is 10.6667px (20 occurrences) and the most common padding 16px, then 5.33333px.

The first viewport is a three-part composition: a floating navigation capsule centered at the top (43px tall, 471px wide, white with #414141 text), the display headline centered beneath it with hand-lettered tags either side, and a full-width illustration block with a narrow cream margin around it. The page background carries a visible millimetre grid and tiny registration marks ("x ooo / y ooo") in the top-left corner, with the contact address in the top-right corner. A footer follows with 21.3333px Graphik text in tracing-paper color, 354px tall and 1280px wide.

## Elevation & Depth

Depth is stacked from hard offset shadows, not blur. Measured shadows include `rgba(0, 0, 0, 0.15) 2px 2px 2px 0px` on buttons, `rgba(0, 0, 0, 0.1) 4px 4px 0px 0px` (3 occurrences), `rgba(0, 0, 0, 0.1) 6px 6px 0px 0px`, and `rgba(0, 0, 0, 0.1) 4px -2px 0px 0px`, plus one inset combination with `rgba(80, 115, 208, 0.2) 0px 2px 3px 0px inset`. The zero-blur offsets read like paper layers cast on a drafting table. There are no large soft drop shadows.

## Shapes

Corners are almost square. Only two radii are measured on rendered elements: 1.33333px (6 elements, including the navigation capsule) and 2.66667px (4 elements, the cream buttons). The stylesheet also defines `--radius-2` (.125rem), `--radius-4` (.25rem) and `--radius-xl` (.75rem), but the extractor recorded no element using the larger radius. The mobile CTA is the exception at 3.61111px. Illustrations are full-bleed rectangles with no rounding.

## Components

- **Navigation capsule.** White background (#ffffff), 1.33333px radius, 43px high, with the illoca wordmark, links "Features", "Pricing", "FAQs" in Geist Mono, and a cobalt "Try for free" button at its right edge.
- **Primary desktop button.** Cream #fdf8f0 fill, #212121 Geist Mono 500 label at 10.6667px, 4px padding, 2.67px radius and the soft offset shadow. The measured instances are 76px high by 136px wide ("Contact us") and 54px by 166px for the email button.
- **Brand CTA.** "Try for free", #283f7d fill, #ffffff label; in the 390px mobile pass it is 32px high and 100px wide with 10.8333px padding and a 3.61111px radius.
- **Footer.** Tracing-paper-colored text at 21.3333px for the tagline "Architectural design at the speed of thought, not ..." (the text is truncated in the extraction).
- **Inputs and cards.** None were detected (`input` null, `cards` empty).

## Design System Architecture

No public illoca design system, brand guidelines or press kit was found: the paths /brand, /press, /about and /design on illoca.unseen.co all returned 404, and the home page links to none. The de-facto system is the shipped Tailwind stylesheet at https://illoca.unseen.co/, whose root variables are named by role (`--color-primary`, `--color-body`, `--color-nav`, `--font-f37`, `--font-graphik`, `--font-geist`, `--font-architect`, `--font-symbols`) and by scale (`--text-12` through `--text-148`, `--leading-0.9` through `--leading-1.4`, `--tracking-*`). That means the type scale is declared in rem steps of the sizes listed above, fonts are bound to family variables, and colors are few and named.

## Do's and Don'ts

- Do keep cream paper (#eadfc9) as the page and use #373737 for reading text.
- Do use cobalt #283f7d for the single primary action and for full-bleed brand bands with #fef9f1 text.
- Do set labels in Geist Mono at 10.6667px with -0.213333px tracking.
- Do keep corners at 1.33px or 2.67px and shadows as hard offsets.
- Don't add soft blurred drop shadows or large radii; none are measured.
- Don't use white (#ffffff) as a page background; it appears only in the nav capsule and as CTA text.
- Don't document or reuse the cookie or chat controls, if any appear; none were measured as brand UI.

## Responsive Behavior

The extraction's mobile pass at 390px measured only typography and the CTA: h1 57.7777px / 52px F37 Analog 500, h2 50.5555px, body 14.4444px / 15.8889px Graphik Web, and the "Try for free" button at 32px by 100px with a 3.61111px radius. No navigation form, column counts or breakpoint behavior were captured, so those are not measured. The stylesheet declares media features named `--breakpoint-touch` (pointer: coarse), `--breakpoint-nottouch`, `--breakpoint-portrait` and `--breakpoint-ipadpro`, which show that the site distinguishes touch from fine-pointer devices, but the resulting layouts were not measured.

## Iteration Guide

1. Start from the cream page (#eadfc9) and place one illustration at full width.
2. Set the hero in F37 Analog in #373737; use the mobile measurement (57.7777px / 52px, weight 500) as the small-screen reference.
3. Add the navigation capsule in white with Geist Mono labels at 10.6667px and a #283f7d button.
4. Use Graphik Web 13.3333px for copy with -0.4px tracking.
5. Apply the 2.67px radius to buttons and the offset shadow `rgba(0, 0, 0, 0.15) 2px 2px 2px 0px`.
6. Re-measure hover states before specifying them; none were recorded.
