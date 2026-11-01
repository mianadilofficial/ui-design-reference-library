---
version: alpha
name: Google Gemini
category: "AI"
description: "Google Gemini (gemini.google.com/app) is the signed-out chat app in Google Sans Flex (36px weight 320 heading, 13px legal text) on a #faf9f9 canvas with white pill surfaces, a light-blue #c2e7ff Sign in button with #004a77 text, 9999px radii and a soft blue radial glow behind the prompt field."
colors:
  canvas: "#ffffff"
  page-body: "#faf9f9"
  ink: "#444746"
  primary: "#c2e7ff"
  on-primary: "#004a77"
  surface-sidebar-pill: "#f2f0f0"
  ink-black: "#000000"
  ink-heading: "#1f1f1f"
typography:
  display:
    fontFamily: "\"Google Sans Flex\", \"Google Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 36px
    fontWeight: 320
    lineHeight: 44px
  display-mobile:
    fontFamily: "\"Google Sans Flex\", \"Google Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 32px
    fontWeight: 360
    lineHeight: 38px
  body:
    fontFamily: "\"Google Sans Flex\", \"Google Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 17px
  button:
    fontFamily: "\"Google Sans Flex\", \"Google Sans Text\", \"Google Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 500
  link:
    fontFamily: "\"Google Sans Flex\", \"Google Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 17px
    fontWeight: 470
    lineHeight: 24px
rounded:
  xs: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 52px
  s9: 60px
  s10: 72px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 40px
  link:
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    padding: 4px 0px
---

## Overview

The measured page is Gemini's signed-out web app (https://gemini.google.com/app, title "Google Gemini", 1280px wide, 800px tall, a single viewport). It is a chat product, not a marketing site: a white left sidebar and a pale canvas holding a centred greeting and an input. The sidebar shows the four-colour Gemini spark and the word "Gemini", a collapse icon, "New chat" (disabled-looking grey), "Images", an info line "Sign in to save activity", and at the bottom "About Gemini", "Get Gemini App", "Subscriptions", "For Business", a grey "Sign in" pill and a settings icon. At the top right is a light-blue "Sign in" pill. In the middle the h1 "Meet Gemini, your personal AI assistant" is set in light-weight 36px type above a rounded prompt field ("Ask Gemini", a plus button, the model selector "Flash-Lite" and a microphone). A soft blue radial glow sits behind the field. The page ends with legal text: "Google Terms and the Google Privacy Policy apply. Gemini is AI and can make mistakes."

The aesthetic is calm Material-derived minimalism: very little ink, huge empty space, generous pill radii and a single soft colour glow. The voice is plain and friendly, with sentence-case labels and no exclamation marks.

## Colors

`{colors.canvas}` (#ffffff) is the sidebar and field fill (273 area weight), while the main content surface (`{colors.page-body}`, #faf9f9) is the body background measured on the page role. `{colors.primary}` (#c2e7ff) is a light blue fill, used for the top-right "Sign in" button, with `{colors.on-primary}` (#004a77) deep-blue text on it; `{colors.surface-sidebar-pill}` (#f2f0f0) fills the sidebar "Sign in" pill. Text: `{colors.ink}` (#444746, 101 characters, legal text and secondary copy), `{colors.ink-black}` (#000000, 93; sidebar labels and links) and `{colors.ink-3}` (#1f1f1f, 71; the heading, with hover colour #1f1f1f on links). The blue radial glow behind the prompt is a gradient in the capture; its colour stops were not measured and are not tokenised. The Gemini spark logo uses multiple colours that were not measured as CSS values.

## Typography

Google Sans Flex (a variable font with an axis range of 280 to 540 and slant 0 to 10 degrees) is the interface typeface, with fallbacks "Google Sans", "Google Sans Text" and "Helvetica Neue". Loaded fonts also include Google Symbols and Luminous Symbols for icons. Weights are unusually fine-grained because of the variable axis: 320 for the 36px h1 (39 characters), 360 for the 32px mobile h1, 400 (186 characters), 470 for sidebar links and 500 for buttons; 700 appears on 24 characters set in Times, which is a fallback face and not a brand choice. The type scale is 36px/44px (h1), 32px/38px (mobile h1), 17px/24px (links), 15px/20px (secondary button), 14px (button) and 13px/17px (legal text, the most frequent at 179 characters). Variable-font root variables such as `--gds-type-scale-default-wght` (400), `-wdth` (100), `-slnt` (0) and `-rond` (0) set the default axes.

## Layout

The viewport is a two-region app shell: a left sidebar (width not measured) and a main stage with content centred horizontally and vertically in the upper-middle. Measured gaps: 8px (31), 12px, 16px, 4px and 52px; paddings 4px (12), 8px (10), 2px, 6px, 16px, 12px, 60px, 72px and 20px. The prompt field is a single wide rounded bar; the sidebar groups navigation at the top and utilities at the bottom, with the sign-in state in the footer corner.

## Content, Voice and Interaction Patterns

Copy is functional and minimal. Navigation labels are one or two words ("Images", "Subscriptions", "For Business"), the prompt placeholder is the product name itself ("Ask Gemini"), and the only persuasion on the page is the headline "Meet Gemini, your personal AI assistant". Honesty about the product is built into the legal line, which states that "Gemini is AI and can make mistakes". The signed-out state is communicated softly: "New chat" is greyed, and a sidebar line reads "Sign in to save activity" with an underlined link, instead of blocking the page with a modal. The model selector inside the prompt bar shows the current model ("Flash-Lite") with a chevron, treating model choice as a small inline control rather than a settings page. Icons are outlined glyphs from Google Symbols, one per sidebar item, set at the same optical weight as the 17px labels.

The result is a product surface where the interface almost disappears: there is no hero image, no feature grid and no pricing block on this page, and every measured colour apart from the two blue values is a neutral. Anyone reproducing it should therefore concentrate on spacing, type weight and radius rather than on decoration.

## Elevation & Depth

Almost flat. One shadow was measured: `rgba(0, 0, 0, 0.16) 0px 2px 8px -2px`. Hierarchy is carried by white surfaces on a very light grey-white canvas and by the diffuse blue glow behind the input, which gives the page its only atmosphere.

## Shapes

Everything interactive is pill-shaped: 9999px radius on 31 elements (buttons, sidebar items, nav chips). A 32px radius is measured on one container, and two blob-like radii with percentage values (about 47% to 66%) shape the organic logo marks. The prompt field in the capture is a full pill.

## Components

- Primary pill ("Sign in", top right): #c2e7ff fill, #004a77 14px weight 500 text, 9999px radius, 0px 16px padding, 40px high, 77px wide.
- Secondary pill (sidebar "Sign in"): #f2f0f0 fill, black 15px/20px text, 9999px radius, 0px 12px padding, 36px high, 69px wide.
- Sidebar links ("Images", "About Gemini", "Subscriptions", "For Business"): black 17px weight 470 text, 4px 0px padding; the hover colour was measured as #1f1f1f.
- Prompt field: white pill with a plus action, placeholder "Ask Gemini", model selector "Flash-Lite" and microphone.
- Legal footer: 13px #444746 text with underlined links "Google Terms" and "Google Privacy Policy".

## Design System Architecture

Shipped CSS shows the Material Design system and Google's internal design tokens: `--mat-sys-*` (for example `--mat-sys-on-surface`), `--mat-focus-indicator-*` (1px focus border width), the `--gds-type-scale-*` variable-font axis variables and `--lm-glow-*` variables (`--lm-glow-body-base`, `--lm-glow-body-mid`) that drive the glow effect. No public design-system or brand-guideline page was opened for this page, so none is cited. Only values measured on rendered elements are tokenised here.

## Do's and Don'ts

- Do keep the surface white and nearly empty, with a centred heading in light-weight Google Sans Flex.
- Do use pill radii (9999px) for every button and field.
- Do reserve #c2e7ff with #004a77 text for the single primary action.
- Do show legal text at 13px in #444746.
- Don't add borders or heavy shadows; one soft shadow was the only elevation measured.
- Don't use bold headings; the h1 weight measured is 320.

## Responsive Behavior

At 390px the h1 measured 32px/38px at weight 360; body legal text stayed 13px/17px, the legal paragraph was 329px wide and 34px high (two lines), and the primary "Sign in" button remained 40px by 77px. Mobile sizes by characters: 13px (91), 17px (88), 32px (63), 18px (20), 14px (7), 15px (7), 20px (6). Sidebar collapse behaviour and prompt-field resizing were not measured.

## Iteration Guide

1. Use Google Sans Flex with fine weights: 320 for large headings, 400 for body, 500 for buttons.
2. Keep the page #faf9f9 with white pill surfaces and one light-blue action.
3. Use 9999px radii for all controls; keep sizes to 36px, 17px, 14px and 13px.
4. Add atmosphere with a single blurred blue glow behind the main field.
5. Dark mode, signed-in states and chat output styling were not measured.
