---
version: alpha
name: Privy
category: "Design Systems"
description: "The Privy digital-identity and e-signature site (privy.id, Indonesia): Google Sans Flex Variable at 56px/700 headlines, DM Sans on buttons, Privy red #e60034 pill buttons, deep plum ink #430a23, white content bands, beige #f2e8dd footer and dark burgundy sections with a dotted pattern."
colors:
  canvas: "#ffffff"
  ink: "#430a23"
  primary: "#e60034"
  on-primary: "#ffffff"
  ink-plum-muted: "#661135a8"
  on-dark-body: "#ffffffcc"
  on-dark-soft: "#ffffffd6"
  card-bg: "#db21774d"
  surface-beige: "#f2e8dd"
  footer-border: "#ff32f824"
typography:
  display:
    fontFamily: "\"Google Sans Flex Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 67.2px
  display-mobile:
    fontFamily: "\"Google Sans Flex Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: "\"Google Sans Flex Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 52.8px
  subheading:
    fontFamily: "\"Google Sans Flex Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
  body:
    fontFamily: "\"Google Sans Flex Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: "\"DM Sans Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  nav:
    fontFamily: "\"Google Sans Flex Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  button-secondary:
    fontFamily: "\"Google Sans Flex Variable\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26.4px
rounded:
  xs: 8px
  sm: 10px
  md: 14px
  lg: 16px
  xl: 17.04px
  2xl: 20px
  3xl: 23px
  4xl: 28px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 11.2px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 57px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    borderColor: "{colors.surface-beige}"
  footer:
    backgroundColor: "{colors.surface-beige}"
    textColor: "{colors.ink}"
    padding: 64px 64px 24px
    borderColor: "{colors.footer-border}"
---

## Overview

This file describes the Privy home page at `https://privy.id/` (title "Digital Identity & e-Signature Platform Indonesia | Privy"), the site of PT Privy Identitas Digital, an Indonesian digital identity, e-KYC and e-signature provider. The capture shows the page under a promotional pop-up and dimmed top section: a modal reading "Buy Annual Employee Account, Get up to 6 Months FREE" with a "Claim Offer Now" button, and a "Need Help?" chat bubble at the right edge. I re-ran the extractor with `--stealth` once and the pop-up still covers the hero. Neither the modal, its offer button, nor the chat widget is documented here as brand UI; its pink badges are promotional artwork.

Behind and around the overlay the page reads as follows. A thin ticker strip at the top repeats "Click here to check your PDF document authenticity". The header has the Privy wordmark, links (Home, Product, Resources, Company, The Warranty) and three translucent buttons: "Verify a Document", a red "Login", "Contact Us". The hero is a full-bleed dark photograph with the headline "Certainty Behind Every Identity", a white subline about combining advanced intelligence to certify the digital certificate, a red "Get your PrivyID" pill and a ghost pill, plus slider arrows. Below the hero, white bands carry four statistics in large red type (71+ Million Users, 160+ Million Documents, 300,000+ Verified Businesses, 99% Users Onboarding), industry filter pills (Insurance, Fintech, Banking & Multifinance, Education, Health Care, HR & Workforce, Telecommunications, Others) over a row of partner logos (Zurich, Avrist, Prudential, BRI Life, AXA, Great Eastern, Manulife), then deep burgundy sections with a dotted pattern and centered white headlines: "Verify Every Identity with e-KYC", "Digital Signing Made Simple and Secure", "Your Digital Identity, Verified with PrivyID".

The voice is confident and trust-focused with a bilingual flavor (English UI, Indonesian body excerpts such as "Saat sengketa bisnis muncul..."). Imagery is photographic people and phone mockups on burgundy.

## Colors

- **Canvas `#ffffff`** is the dominant background (the largest background area) for content bands.
- **Ink `#430a23`** is a deep plum, the main text color on light surfaces and the large dark background area (measured both as a large background area and as text on about 1,570 characters). It is also the dark section color.
- **Primary `#e60034`** is Privy red (`--color-highlight`, `--color-privy-red`, `--ring`): the fill of the Login and CTA pills, and the color of statistics and links on white.
- **On-primary `#ffffff`** is the label on red buttons and the h1/h2 on dark sections.
- **Ink plum muted `#661135a8`** is the semi-transparent plum used for secondary text on white (about 1,253 characters).
- **On-dark body `#ffffffcc`** and **on-dark soft `#ffffffd6`** are the translucent white body texts on dark photography and burgundy.
- **Card bg `#db21774d`** is the translucent magenta-pink panel fill, with a `#f2e8dd` border.
- **Surface beige `#f2e8dd`** (`--color-privy-beige`) is the footer fill.
- **Footer border `#ff32f824`** is the faint pink hairline around the footer.

The root variables also list a supporting palette, `--color-privy-blush` `#f2dadf`, `--color-privy-cream` `#fbbfa1`, `--color-privy-pink-light` `#ed907f`, `--color-privy-pink-dark` `#f26e64`, `--color-privy-green` `#76ce93`, `--color-privy-amber` `#ff9e00`, and plan gradient stops `#db3753` and `#9c2439`; these are defined but were not measured on screen, so they are not tokens.

## Typography

Two variable fonts are loaded: **Google Sans Flex Variable** (the page family, weight range 1 to 1000; `--font-sans`) and **DM Sans Variable** (`--font-ui`, used on the small header buttons, about 32 characters). Weight 300 carries the most characters (about 3,682), then 400 and 700.

- **Display** (h1 "Certainty Behind Every Identity"): 56px, 700, line height 67.2px; 40px/48px at the 390px mobile measurement.
- **Heading** (h2): 44px, 700, line height 52.8px.
- **Subheading** (h3 card titles): 24px, 700, line height 28.8px.
- **Body**: 16px, weight 300, line height 24px. The light weight on dark backgrounds is the signature texture.
- **Nav**: 16px, 400, line height 19.2px.
- **Button**: DM Sans 14px, 600, line height 21px; the large hero CTA is 22px at weight 400 on a 26.4px line.

Frequent sizes are 16px, 14px, 18px, 24px and 40px. Letter-spacing is not adjusted.

## Layout

Centered content on a generous canvas with wide section paddings of 64px and 24px (the footer uses 64px 64px 24px), content paddings of 16px and gaps of 8px and 12px, with 40px gaps between larger groups. The header height variable is 4rem. Full-bleed sections alternate: dark photographic hero, white statistics band, white filters and logo carousel, three burgundy value propositions with dot-grid texture, then a beige footer 493px tall. Statistic blocks sit four across.

## Elevation & Depth

Mostly flat with a few effects. The most common shadow is a 1px inset ring (an oklab 10% outline) measured on 16 elements, and a soft `rgba(23, 73, 77, 0.15) 0px 20px 30px 0px` appears on three elements. Depth comes instead from translucent layers (`#ffffff66`, `#ffffff99`, `#ff00ff14` fills), the dotted burgundy backdrop and full-bleed photography. The hero photograph appears darkened behind its white text in the capture, though the pop-up and dimming layer make this hard to separate.

## Shapes

Pills dominate: 9999px (the measured value is 3.35544e+07px) on 60 elements, including Login, hero CTAs, filter pills and ticker chips. Cards and panels use 16px (25 elements), 10px (16), 8px, 20px and 14px; a large card measures 28.4px, and a badge uses an asymmetric radius (100px 8px 100px 100px). The root `--radius` is 0.625rem.

## Components

- **Primary button (Login).** Fill `#e60034`, white label, DM Sans 14px weight 600, height 40px, padding 0px 16px, fully rounded.
- **Large CTA.** "Get Enterprise ID Verified" style: same red, Google Sans Flex 22px weight 400, height 57px, padding 0px 24px, pill.
- **Header buttons.** "Verify a Document" and "Contact Us" are translucent grey-white pills; "Login" is red with an icon.
- **Filter pills.** White pills with a red label; the active one (Insurance) is solid red with white text.
- **Statistic.** Large red bold numeral with a red bold label and a muted description.
- **Logo cards.** Small white rounded tiles with a soft border and a partner logo.
- **Dark section.** Burgundy with dotted pattern, small uppercase chip label, centered 44px white heading and soft white body text.
- **Footer.** Beige `#f2e8dd`, text `#430a23`, 64px padding, company address.

## Design System Architecture

Privy publishes an open-source design system called **Persona** at https://privy-open-source.github.io/design-system, which I opened: it is described as maintained by PrivyID, MIT-licensed, with foundations (colors, typography), components, icon and illustration assets and tools such as a PDF coordinate finder. The GitHub repository (https://github.com/privy-open-source/design-system), which I opened, says it is built on Nuxt 3, Vue 3, TypeScript and Tailwind CSS and is published on npm as `@privyid/persona`. I did not find evidence that privy.id itself uses Persona. The measured page's root variables are Tailwind v4 and Nuxt UI style (`--ui-header-height`, `--ui-text-muted`, `--ui-color-primary-*`, `--ui-radius`) alongside Privy's own `--color-privy-*` and `--color-highlight` names, and none carry a Persona name. Persona is therefore described only; no value here comes from its docs.

The de-facto marketing system is Tailwind with Nuxt UI semantic variables, two variable fonts, and a Privy brand palette defined as `--color-privy-red`, `-beige`, `-blush`, `-cream`, `-pink-light`, `-pink-dark`, `-green` and `-amber`.

## Do's and Don'ts

- Do use `#e60034` for primary actions, statistics and active filters, always as fully rounded pills.
- Do set headings in Google Sans Flex 700 and body in weight 300, with translucent whites on dark sections.
- Do alternate white content bands with burgundy dotted sections.
- Do keep the footer beige `#f2e8dd` with plum `#430a23` text.
- Don't document the promotional modal, its offer button or the chat bubble as part of the system.
- Don't place thin white text over photography without the dark overlay.
- Don't use the supplementary pink and amber palette as primary action colors.
- Don't square off buttons; the system is pill-first.

## Responsive Behavior

At 390px the h1 reduces from 56px/67.2px to 40px/48px. The header navigation, the four-column statistics and the logo carousel are expected to collapse or scroll at narrow widths, but only the h1 change was measured. Tailwind's spacing unit is 0.25rem, and the logo row bleeds off both edges as a scrolling strip.

## Iteration Guide

1. Canvas `#ffffff`, ink `#430a23`, primary `#e60034`, footer `#f2e8dd`.
2. Type: Google Sans Flex, 56/67.2 and 44/52.8 at 700, body 16/24 at 300; DM Sans 14 at 600 on small buttons.
3. Pills 40px high with 16px padding, or 57px with 24px padding for hero CTAs.
4. Dark burgundy sections use `#430a23`-family backgrounds with `#ffffffcc` body text.
5. Verify with the live `--color-privy-*` variables before adding any color.
