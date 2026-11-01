---
version: alpha
name: sipgate
category: "Design Systems"
description: "sipgate.de, the German cloud-telephony and AI-agent platform: PX Grotesk bold at 80px mixed with Tiempos Light serif in headlines, near-black #121212 pill buttons that flip to electric lime #deff00 on hover, white and #f8f8f8 canvas, soft cornflower #edf2ff and mint #ebf5eb section tints, and 24px-radius cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f8f8f8"
  ink: "#121212"
  primary: "#121212"
  on-primary: "#ffffff"
  surface-cornflower-soft: "#edf2ff"
  ink-muted: "#5f5f5f"
  ink-near-black: "#1a1a1a"
  ink-gray: "#808080"
  ink-charcoal: "#3b3b3b"
  hairline: "#e5e7eb"
  link: "#00000080"
  primary-hover: "#deff00"
  accent-cornflower: "#274ff0"
  accent-ai-violet: "#8642fe"
  accent-clementine: "#ff7200"
  surface-mint-soft: "#ebf5eb"
typography:
  display:
    fontFamily: "\"PX Grotesk\", sans-serif"
    fontSize: 80px
    fontWeight: 700
    lineHeight: 80px
    letterSpacing: "-1.36px"
  display-mobile:
    fontFamily: "\"PX Grotesk\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 44.8px
    letterSpacing: "-1.36px"
  heading:
    fontFamily: "\"PX Grotesk\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 27.6px
  subheading:
    fontFamily: "\"PX Grotesk Bold\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 33.6px
  body:
    fontFamily: "\"PX Grotesk\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "\"PX Grotesk\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.5px
  link:
    fontFamily: "\"PX Grotesk\", sans-serif"
    fontSize: 13.5px
    fontWeight: 400
    lineHeight: 19.5px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 16px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 4.8px
  s4: 8px
  s5: 10px
  s6: 11.2px
  s7: 12px
  s8: 13px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 13px 26px
    height: 52px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    padding: 0px 13px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 4px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.canvas}"
---

## Overview

sipgate is a German provider of cloud telephony, contact-center software and, increasingly, AI agents, and its homepage (https://www.sipgate.de, content in German) is built to feel like a modern product company rather than a telecom. The hero is a centered headline in two typographic voices: "Smarte Telefonie," in bold PX Grotesk at 80px, and "die verbindet" in a light serif (Tiempos Light), set on a second line at the same size. That grotesk-plus-serif pairing, repeated in "Entwickelt für bessere Kundengespräche" further down (bold sans for the first words, light serif for the rest), is the clearest brand gesture on the page.

Above the headline sits a pill-shaped announcement chip with an electric-lime tag, "sipgate sona", and the text "Der kostenlose AI Agent" with an arrow. Under the headline the capture shows a large product screenshot: a dark app sidebar (Inbox, Marketing, Service Team, Contact Center) beside a white call list with avatars, status tags and a blue call-in-progress card. A logo strip follows ("Über 40.000 Unternehmen vertrauen auf sipgate": share, Grover, nextbike, Flink, Trade Republic, home24), then a feature section on a pale band with two rounded cards, "Business-Telefonie, passend für jedes Team" and "AI Agenten, die wirklich mitarbeiten". The overall feel is airy, light, friendly and fairly technical, with black as the action color and one electric lime accent.

Two overlays cover the capture and are not brand UI: a cookie-consent dialog ("Consent to Cookies & Data processing", with Save & Exit and Accept all buttons, set in a different serif face) and a chat bubble ("Sie haben Fragen zu sipgate?") at the lower right. A second extraction with the stealth option showed the same dialog, so neither the consent dialog's controls nor the chat widget's button are documented as brand components here, and the measured chat-widget button (a 6px-radius dark button) was dropped from the tokens. The voice is plain German: "Kostenlos testen", "Vertrieb kontaktieren", "Beratung vereinbaren", "Mehr erfahren".

## Colors

The base is neutral and the personality comes from a small set of named brand primitives that the site exposes as Webflow variables.

- **Canvas #ffffff** is the page ground; **page-largest #f8f8f8** is the widest-area background (the pale band behind the cards, and the card fill itself); **surface-cornflower-soft #edf2ff** and **surface-mint-soft #ebf5eb** are the soft tinted section and chip backgrounds.
- **Ink #121212** is the near-black used for nearly all text and for the primary button; **ink-muted #5f5f5f**, **ink-gray #808080** and **ink-charcoal #3b3b3b** are the secondary text grays; **ink-near-black #1a1a1a** is the dark of the app-screenshot panel and some text. **Link #00000080** is a 50 percent black used for small utility links such as the top bar.
- **Hairline #e5e7eb** is the 1px border and divider gray.
- **Primary #121212** on **on-primary #ffffff** is the main button. **Primary-hover #deff00**, the electric lime, replaces the black fill on hover with the label turning dark: the one loud moment in an otherwise monochrome interface, and the same lime fills the "sipgate sona" chip.
- Accents named in the site's variables: **accent-cornflower #274ff0** (the `--accent-color--accent` variable), **accent-ai-violet #8642fe** (`--accent-color--ai`, tied to the AI features) and **accent-clementine #ff7200**, with matching "soft", "softest" and "dark" steps for each family in the stylesheet.

Black is the brand's action color; the chromatic accents are used for tags, illustrations and product UI states rather than for buttons.

## Typography

The primary family is PX Grotesk, loaded in regular (400) and bold (700) weights, with the site's variables naming "PX Grotesk Bold", Arial, sans-serif for bold text. The secondary family is Tiempos, loaded at weight 300 (Tiempos Light), with Times New Roman as the declared fallback, used for the editorial half of headlines at a slightly smaller size (the variable for the largest serif headline is 6.24rem against 6.5rem for the sans). The icon font is named "sipgate Icons".

- **Display 80px / 80px**, weight 700, letter-spacing -1.36px, for the hero headline (this equals the site's `headline-xl` variable of 5rem); on a 390px mobile viewport **40px / 44.8px** with the same -1.36px tracking.
- **Heading 24px / 27.6px**, weight 400, for lead-in statements such as "Über 40.000 Unternehmen vertrauen auf sipgate".
- **Subheading 24px / 33.6px**, weight 700, in the bold face, for card titles.
- **Body 18px / 27px**, weight 400 (the site's `text-size-medium` is 1.125rem with a global line height of 1.5em).
- **Button 16px / 24px**, weight 400 with 0.5px letter-spacing; **link 13.5px / 19.5px** for the utility bar.

The typefaces are files loaded by the site; for work outside it, use Arial (the declared fallback) for the sans and Times New Roman (the declared fallback) for the Tiempos lines. The sans/serif mixing happens inside one headline, with a bold sans first part and a light serif second part.

## Layout

The page is a centered, wide-open column. The hero text is centered with generous space above the product screenshot, which is wide (nearly the full 1280px desktop frame) and sits inside a dark rounded device-like frame. Sections beneath use big vertical gaps, centered headings and a body paragraph, and then two equal cards side by side with 24px radius and a hairline border on a #f8f8f8 fill.

The top of the page has two bars: a thin utility strip (Unternehmen dropdown, a phone number, a small outlined Login pill) and the main navigation (logo, Telefonie, AI Agents, Contact Center, Preise, Ressourcen, API with chevrons on most, a search icon, a "Vertrieb kontaktieren" outlined pill and a black "Kostenlos testen" pill). Spacing values measured on the page include 2, 4, 4.8, 8, 10, 11.2, 12, 13, 16 and 24px. The primary button pads 13px by 26px and stands 52px tall.

## Elevation & Depth

Depth is minimal and the stylesheet is overwhelmingly flat (`none` is the most frequent box-shadow value). Where shadows appear they are tight, low-blur halos of black at 25 to 50 percent opacity used on small floating elements, plus a 3px focus ring defined with a red variable. Cards are distinguished by a pale gray fill and a 1px hairline border rather than a shadow. The only real layering is in the product screenshot, where the white call-list panel overlaps a dark sidebar and a blue call card floats at the right, and in the lime chip over the white canvas.

## Shapes

Radii are a deliberate scale: 3px, 4px, 6px (xs, sm, md), 8px (lg), 16px (xl), 24px (2xl) and a full pill. They map to the site's named radius variables: small 0.5rem (8px), medium 1rem (16px), large 1.5rem (24px) and round 1000px. Buttons and the navigation chips are full pills; cards use 24px; smaller controls use the 6 to 8px steps. The contrast of fully round controls with large soft rectangles is a core part of the friendly feel.

## Components

**Primary button.** A black (#121212) pill with a white 16px label, 13px by 26px padding, 52px tall and a 1px border in the same black. Hover swaps the fill to electric lime #deff00 and the label to near-black. It carries "Kostenlos testen", "Beratung vereinbaren" and "Mehr erfahren".

**Secondary outline pill.** "Vertrieb kontaktieren" in the header appears as a transparent pill with a thin dark border and dark label. Its exact measurements were not recorded, so no dimensions are claimed.

**Navigation links.** 16px labels in ink with small chevrons; the nav-link pill uses a white fill, 4px padding and a #e5e7eb border.

**Announcement chip.** A pill containing a lime tag and a short sentence with an arrow.

**Cards.** #f8f8f8 fill, 24px radius, 1px #e5e7eb border, bold 24px title, small body text and a product mockup anchored at the bottom.

**Utility links.** Small 13.5px links in 50 percent black in the top strip.

**Consent dialog and chat bubble.** These overlays appear over the capture; they are not part of the brand's component set.

## Design System Architecture

sipgate has a public design system called pandaUI, hosted as a Storybook at https://panda.sipgatedesign.com and described in its page metadata as the React component library of the sipgate Design System, containing the UI components of the sipgate web apps. It is real, but this marketing site does not use it: the homepage is a Webflow build (its stylesheet is served from the Webflow CDN and the page carries Webflow markers) and none of its HTML or variable names reference pandaUI. No value on this page is taken from pandaUI.

The de-facto system of the marketing site lives in Webflow variables, which is unusually thorough. Color primitives are named in groups such as `_color-primitives---brand--electric-lime`, with `brand-dark`, `brand-soft` and `brand-softest` steps for each hue (cornflower, lavender, mint, clementine, electric lime) and neutral steps like neutral-100 (#f8f8f8) and neutral-150 (#e5e7eb). Semantic variables map these to backgrounds, borders and text colors (for example `background-electric-lime` and `border-success`). Type sizes are variables from headline-xxl (6.5rem) down to text-size-tiny (0.75rem), radius variables run small, medium, large and round, and a duplicated copy of everything is prefixed `sipgate-pattern-library-3346_`, which suggests a shared Webflow library imported into the site.

## Do's and Don'ts

- Do use black pill buttons as the single primary action and let hover turn them electric lime.
- Do mix a bold grotesk with a light serif inside one headline, sans first, serif second.
- Do use #f8f8f8, #edf2ff and #ebf5eb for soft section backgrounds and keep the canvas white.
- Do give cards 24px radius and a hairline border instead of a shadow.
- Do keep copy short and in plain German imperatives.
- Don't use the lime as a text color on white; it is a fill and a hover state.
- Don't use the accent blues and violets for buttons; they belong to tags, illustrations and AI cues.
- Don't copy the cookie dialog or chat bubble into the brand UI.
- Don't add drop shadows to cards or buttons.
- Don't square off the buttons or round cards below the 16px step.

## Responsive Behavior

Measurements were recorded at 1280px and at a 390px mobile viewport. The hero display halves from 80px with an 80px line height to 40px with a 44.8px line height, with unchanged letter-spacing of -1.36px, so the headline keeps its tight, dense character on phones. The site's size variables also include intermediate headline steps, so the type scale is stepped rather than fluid. No mobile screenshot was captured, so the navigation collapse and the card stacking order are not documented here.

## Iteration Guide

1. Start with canvas #ffffff, ink and primary #121212, and primary-hover #deff00.
2. Build hero headlines at 80px/80px in bold PX Grotesk with -1.36px tracking, finishing the line in Tiempos Light; drop to 40px/44.8px on mobile.
3. Make buttons full pills, 16px label, 13px by 26px padding, 52px tall.
4. Use #f8f8f8 for card fills with 24px radius and a #e5e7eb border.
5. Reserve #274ff0 and #8642fe for tags and AI or product UI signals.
6. Treat third-party overlays as out of scope for tokens.
7. Write labels in short German imperatives such as "Kostenlos testen".
