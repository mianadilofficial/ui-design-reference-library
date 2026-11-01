---
version: alpha
name: Huge
category: "Agencies & Studios"
description: "Huge (hugeinc.com), a digital experience agency, measured live: matter typeface at weight 600 with -0.05em tracking from a 284.8px \"Hello.\" hero to 42px copy, magenta #ff0090 accents, #0d0b0a ink on white and warm #faf8f4 tiles, a white 999px pill Let's talk button and 16px client-logo tiles."
colors:
  canvas: "#ffffff"
  ink: "#0d0b0a"
  primary: "#ff0090"
  surface-2: "#faf8f4"
  ink-2: "#f7f4ee"
  ink-4: "#ffffff80"
  ink-5: "#76726e"
  ink-6: "#00000080"
  hairline: "#0000004d"
  card-bg: "#000000"
typography:
  display:
    fontFamily: matter, "matter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 284.8px
    fontWeight: 600
    lineHeight: 250.624px
    letterSpacing: "-19.936px"
  display-mobile:
    fontFamily: matter, "matter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 161.85px
    fontWeight: 600
    lineHeight: 142.428px
    letterSpacing: "-11.3295px"
  heading:
    fontFamily: matter, "matter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 136.576px
    fontWeight: 600
    lineHeight: 122.918px
    letterSpacing: "-6.8288px"
  subheading:
    fontFamily: matter, "matter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 42.016px
    fontWeight: 600
    lineHeight: 42.016px
    letterSpacing: "-0.84032px"
  body:
    fontFamily: matter, "matter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 55.392px
    fontWeight: 600
    lineHeight: 49.8528px
    letterSpacing: "-2.7696px"
  nav:
    fontFamily: matter, "matter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 18.688px
    fontWeight: 400
    lineHeight: 29.9008px
  link:
    fontFamily: matter, "matter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 24.768px
    fontWeight: 600
    lineHeight: 27.2448px
    letterSpacing: "-0.24768px"
  input:
    fontFamily: matter, "matter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 13px
  xl: 16px
  2xl: 20px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 30.69px
  s8: 32px
  s9: 37.38px
  s10: 40px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 40px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 24px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 110.56px 4px 24px
---

## Overview
The measured page is https://www.hugeinc.com/ (title "Huge.", lang `en`), the home page of Huge, a digital experience and design agency. The capture opens on a black stage: the logo wordmark "Huge" in magenta at the top left, the menu (Work, Solutions, Approach, Company, Ideas, Careers) centred in white, and a white pill button "Let's talk" at the right. The hero is a giant white "Hello." with a tagline ("Mentally, Fridays are the weekend. But what about one last big idea?") overlapping a large 3D inflated pink-and-chrome letter H, with a small outlined video tile "Play showreel" at the lower right.

The next screen is white and almost entirely typographic: "We make things that matter to people." set at a huge size in near-black with the word "people." in magenta. A dense paragraph follows ("Anyone can make. Creating experiences that resonate with culture and business is the hard part. It takes design, tech and human judgment.") beside a column of arrow links (See the work., Discover our solutions., Check our approach., Latest ideas & news., This is Huge., Want to join us?). A grid of warm off-white tiles holds black client logos (McDonald's, Big Green Egg, Rapha, PlayStation, Inova, LPGA, On, Tracksmith). Later sections include idea articles ("Every designer now leads an orchestra...") and a huge black footer greeting "Bye." with a newsletter prompt ("Get Huge in your DMs."). The voice is direct, wry and confident.

## Colors
- **Canvas** `#ffffff` (12779 area), with warm surfaces `#faf8f4` (4939; `--color-neutral-25`), `#e1ddd7` (810; `--color-neutral-200`) and `#f7f4ee` (350).
- **Ink** `#0d0b0a` (908 characters; `--color-neutral-950`): headline and link colour, and the footer background (3129 area). Text on dark: `#f7f4ee` (467) and white (270), plus `#ffffff80` for muted copy and `#76726e`, `#00000080` for secondary text.
- **Primary magenta** `#ff0090` (`--color-brand-magenta` and `--color-brand-pink`; 47 characters of text): the logo, the emphasised word "people." and accents. The extraction found no filled magenta button; the main button is white.
- **Card** `#000000` (`card-bg`), used for the black showreel tile and cards, with a white 1px outline.
- **Hairline** `#0000004d`.
Neutral ramps are declared as root variables (`--color-neutral-0` `#fff` to `-1000` `#000`, including `#ede8e0`, `#d5d2cf`, `#55514d`, `#433f3c`, `#1a1816`) alongside slate ramps (`--color-slate-200: #bec7da`, `--color-slate-500: #5b729f`) that did not measure on the visible page.

## Typography
A single family, "matter" (2056 characters; loaded in weights 400, 500 and 600) with a "matter Fallback" and the system sans stack, carries all text. Weight 600 dominates (1841 characters); 400 appears in navigation (200) and 500 in 15 characters. All headings use tight tracking of -0.05em, the root `--text-h1--letter-spacing`.

- **display**: 284.8px / 600, line-height 250.624px, letter-spacing -19.936px ("Hello.").
- **display-mobile**: 161.85px / 600, line-height 142.428px, letter-spacing -11.3295px.
- **heading**: 136.576px / 600, line-height 122.918px, letter-spacing -6.8288px ("We make things that matter to people.").
- **subheading**: 42.016px / 600, line-height 42.016px, letter-spacing -0.84032px (article headlines; the most used size, 875 characters).
- **body**: 55.392px / 600, line-height 49.8528px, letter-spacing -2.7696px (the lead paragraph; body copy here is itself display scale).
- **link**: 24.768px / 600, letter-spacing -0.24768px ("See the work.").
- **nav**: 18.688px / 400, line-height 29.9008px (the visible bar renders 16px with -0.48px tracking).
- **input**: 20px / 600.
Line heights are about 0.88 to 1 times the font size on headings. The font is a commercial sans; no substitute was measured.

## Layout
Desktop pass: 1280px wide, 15515px tall. The first screen is full-bleed black, 70px nav row with 40px horizontal padding. Content then sits in a wide container: headings left-aligned across the full width, the lead paragraph in a left column with the link list in a right column, and the client grid as four equal tiles per row with small gutters. The footer is an 844px-tall black block with 110.56px top padding and a 226.304px "Bye." wordmark. Spacing tokens are 4, 8, 12, 16, 20, 24, 30.69, 32, 37.38 and 40px; `--header-height` is 6rem.

## Elevation & Depth
No box shadows were measured. Depth comes from the 3D hero object, the black showreel tile with its white outline, and the colour jump from black stage to white page to warm tiles.

## Shapes
Radii measured: 8px (13 elements), 2px (13), 16px (10, client tiles and cards), 999px (9, pill buttons), 20px (6), 13px and 4px (one each). The "Let's talk" button is a 999px pill; tiles and the showreel card use 16px; the showreel tile also has an outer 1px white outline. The root scale defines `--radius-sm: 6px`, `--radius-md: 8px`, `--radius-lg: 10px`, `--radius-2xl: 16px` and `--radius-4xl: 24px`.

## Components
- **pill button** ("Let's talk"): white fill, `#0d0b0a` text, 999px radius, 44px tall; on hover the text turns white and the border white (measured rgb(255, 255, 255)).
- **link row**: 24.768px / 600 ink text with a trailing arrow icon and -0.24768px tracking.
- **client tile**: `#faf8f4` surface, 16px radius, centred black logo.
- **card** (showreel): black fill, 16px radius, white outline, "Play showreel" translucent pill button with an expand icon.
- **nav**: transparent bar over the black hero, white text, 0 40px padding.
- **footer**: `#0d0b0a` with white text and a huge "Bye." heading; newsletter field with 20px / 600 input text.

## Design System Architecture
No public design system or brand guideline was found. The shipped CSS is a Tailwind v4 build with 219 root variables: a named colour set (`--color-brand-magenta: #ff0090`, `--color-brand-white: #fff`, `--color-neutral-0` to `-1000`, `--color-slate-*`), a radius scale (`--radius-none` to `--radius-4xl`), a spacing scale (`--spacing-4xl: 3rem`), type styles per heading level (`--text-h1--letter-spacing: -.05em` and equivalents for h2 to h4), easing curves (`--ease-in`) and the font variable `--font-body: "matter", "matter Fallback", ui-sans-serif...`. The scale shows that tight tracking is systematised at -0.05em across headings.

## Do's and Don'ts
- Do set everything in matter at weight 600 with tight negative tracking on headings.
- Do use magenta `#ff0090` for one emphasised word or the logo, not for large fills.
- Do alternate black stages, white pages and warm `#faf8f4` tiles.
- Do use white pill buttons (999px) for primary actions on black.
- Don't add shadows; none were measured.
- Don't set long copy in small sizes; the lead paragraph is 55.392px.
- Don't use the slate ramp from the root variables in layouts.

## Responsive Behavior
At 390px the mobile pass measured: "Hello." at 161.85px (284.8px desktop), the heading at 68px (136.576px), body at 36px (55.392px), and the nav block 96px tall showing a "Menu" control at 16px / 600 on white. Frequent mobile sizes: 32px (561 characters), 36px (481), 22px (479), 14px, 50px. No CTA was detected at mobile width. Other responsive layout behaviour is not measured.

## Iteration Guide
1. Open on a black stage with a 3D magenta letter, a giant white "Hello." (284.8px, -19.936px tracking) and a white pill button.
2. Follow with a white page and a 136.576px headline, ending in a magenta word.
3. Set a 55.392px lead paragraph beside a column of 24.768px arrow links.
4. Add a 4-up grid of `#faf8f4` tiles at 16px radius with black logos.
5. Finish with a `#0d0b0a` footer and an oversized "Bye."

## Notes for Rebuilding
The page has only one typeface and almost no decoration, so the effect comes from scale and contrast. The same weight (600) is used for the 284.8px hero, the 136.576px statement, the 55.392px lead paragraph and the 24.768px links, and the only size that reads as ordinary text is the 14px to 16px used for navigation and fine print. Tracking is the second lever: -0.05em on headings makes the letters nearly touch. Colour is rationed to black, white, warm neutrals and one magenta, which appears on the logo and a single emphasised word per statement. The client grid uses warm off-white tiles rather than borders, so logos float without frames. The showreel tile is the only element that carries a white outline.
