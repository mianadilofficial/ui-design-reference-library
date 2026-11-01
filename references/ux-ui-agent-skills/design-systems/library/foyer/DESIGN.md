---
version: alpha
name: Foyer
category: "Design Systems"
description: "Foyer is a Luxembourg insurer whose website sets Barlow (400 to 700) on a white canvas with slate ink #3b4856, a single electric blue #2957c8 for actions and the footer, a deep navy #041d58 for card text, and pale feather-grey #f8f9fc bands. Buttons are 50px and 200px pills, cards use an 8px radius with a soft blue-tinted shadow, and photography of smiling households sits beside flat blue illustration."
colors:
  canvas: "#ffffff"
  ink: "#3b4856"
  primary: "#2957c8"
  on-primary: "#ffffff"
  primary-hover: "#0736a8"
  primary-navy: "#041d58"
  ink-secondary: "#454f5f"
  surface-feather: "#f8f9fc"
  border-soft: "#e3e9ef"
  hairline: "#eaeef6"
  primary-600: "#20439d"
  success: "#00856e"
  warning: "#c5530d"
  danger: "#d04348"
typography:
  display:
    fontFamily: Barlow, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 48px
  display-mobile:
    fontFamily: Barlow, sans-serif
    fontSize: 26px
    fontWeight: 500
    lineHeight: 39px
  heading:
    fontFamily: Barlow, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: Barlow, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Barlow, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  link:
    fontFamily: Barlow, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  button-secondary:
    fontFamily: Barlow, "DIN Pro", arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
rounded:
  docs-sm: 4px
  xs: 5px
  sm: 8px
  md: 15px
  lg: 16px
  xl: 22px
  2xl: 50px
  3xl: 100px
  4xl: 200px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 10px 24px
    height: 41px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.4xl}"
    padding: 4px 12px
    height: 32px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 12px 12px 16px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    padding: 8px 24px
  text-input:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body}"
    rounded: "{rounded.3xl}"
    padding: 8px 40px 8px 16px
    height: 40px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary-navy}"
    rounded: "{rounded.sm}"
    padding: 24px
    boxShadow: rgba(1, 33, 60, 0.1) 0px 5px 15px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

## Overview

Foyer is an insurance and finance group in Luxembourg, and its homepage is built to feel like a reassuring neighbour rather than an institution. The captured page opens on a full-width photograph of a smiling couple holding a hoop in a half-packed flat, with the headline "Tenant, protect your home." set in white Barlow over a darkened image, a one-line promise ("Take out insurance for your apartment in just a few clicks") and a compact blue pill, "Get insured online". Four white tiles overlap the bottom edge of the hero: Mobility, Home and Lifestyle, Health, and Saving and Pension. Each has a small colored icon and a thin colored underline (yellow, magenta, violet and teal respectively), which is the only place the page uses more than one accent.

Below the hero the page alternates between white and a pale feather-grey band (#f8f9fc). The first band pairs a rounded photograph of a mother and son, offset against a blue square, with a blue headline "Foyer has been insuring you every day for over 100 years" and three icon columns (Expertise, Trust, Proximity). The next section is a flat illustration of a man on an armchair with speech-bubble chips, headed "For ever greater understanding and transparency". The page continues with a product mock-up of the MyFoyer app (a blue rounded app icon, laptop and phone screens) and a "Discover MyFoyer" pill. A "Phishing alert" card with a megaphone illustration floats at the top right as a dismissable notice, rendered as a white card with a soft shadow.

The voice is short, second-person and reassuring ("Listening to you and your needs wherever you are"). The header is minimal: the Foyer wordmark in blue, a small blue pill "Get your price" with a euro sign, a round blue account button and a hamburger menu.

## Colors

The palette is organised around a single blue and a family of cool greys.

- **Canvas #ffffff** is the main page color.
- **Ink #3b4856** is the most-read text color, a slate blue-grey; **ink-secondary #454f5f** is used for navigation and link text.
- **Primary #2957c8** is the fill of every pill button and of the footer; its hover state is **#0736a8**.
- **Primary-navy #041d58** is the text color on cards and the deep end of the blue scale.
- **Surface-feather #f8f9fc** is the alternate band background; **hairline #eaeef6** fills text inputs and dividers; **border-soft #e3e9ef** is a lighter outline grey.

The Foyer Design System documents this palette on its Couleurs page as named scales: "Feather Grey" (for all borders, components, backgrounds and content, from #f8f9fc at 100 to #1a1d23 at 900), "Primary Blue" (used mainly for buttons, with 500 at #2957c8, 600 at #20439d and 800 at #041d58), and utility scales for Success Green (500 at #00856e), Warning Orange (500 at #c5530d) and Danger Red (500 at #d04348). Those three status colors and primary-600 are included here as cited tokens; they are not visible on the homepage. The page also states that brand colors, found on official documents and the website, should not be confused with the utilitarian interface colors of the newer applications, so the marketing look here and the application look are related but not identical.

## Typography

The homepage is set entirely in **Barlow** with a generic sans-serif fallback; this is the dominant measured family. Headlines are Barlow at weight 500, 32px with a 48px line height (26px with 39px on a 390px phone). Card and section headings are 20px at weight 700 with a 28px line height. Body copy is 16px at weight 400 on a 24px line. Button labels are 14px (21px line height) on the header and hero pills, and 18px at weight 500 on the larger pill links, where the stack adds "DIN Pro" and Arial before the generic fallback. Navigation links are 20px at weight 500.

The design-system documentation tells a different story for applications: its Typography page names the Inter family (InterVariable, then DIN Pro and Arial) as the interface font, sets the standard text size at 14px for expert interfaces, and a minimum of 12px (10px for uppercase). Those Inter sizes were not measured on a rendered component, so only the Barlow values from the homepage are tokens. Use Barlow for marketing surfaces, and expect Inter inside applications built from the component library.

## Layout

The page is a series of full-width bands. The hero is image-led with text anchored left and tiles hugging the bottom edge; subsequent sections use a two-column split with an image or illustration on one side and a headline plus short text on the other, flipping sides from section to section. The three-column "Expertise, Trust, Proximity" row has an icon, a 20px title and two lines of small text each. Spacing values measured on the page are small and fine-grained (1px, 4px, 5px, 6px, 8px, 12px, 15px, 16px, 18px, 20px), with 24px card padding and 24px horizontal padding on the nav. Sections breathe through large vertical padding; the page is not dense.

## Elevation & Depth

Depth comes from a single soft shadow: rgba(1, 33, 60, 0.1) at 0 5px 15px, a navy-tinted translucent shadow recorded on the card component and visible around the phishing alert notice. Buttons carry a pressed-ripple pseudo-layer (a translucent black circle scaled up) rather than a drop shadow. The pale feather-grey bands behave as a second level of elevation, lifting content off the white canvas without any shadow at all. Decorative dotted circles and rings in very light blue sit behind photos and add a subtle layered feel.

## Shapes

The shape language mixes pills and gentle squares. Measured radii on the site are 5px (small elements), 8px (cards), 15px, 16px, 22px, 50px (the header pill), 100px (the text input), 200px (the larger pill links) and a full circle for the account button and some images. The design system's Corner Radius page publishes a stricter rule for application UI: 8px for large containers such as panels and user cards, and 4px for most other components such as buttons and form fields. That 4px value is recorded as docs-sm. The homepage pills therefore are a marketing expression, while the component library squares buttons off.

## Components

- **button-primary**: the header pill "Get your price" is blue #2957c8 with a white 14px label, 10px 24px padding, 41px height and a 50px radius; hover turns it #0736a8.
- **button-secondary**: the hero link-buttons such as "Get insured online" use the same fill with an 18px weight-500 label, 4px 12px padding, 32px height and a 200px radius.
- **text-input**: a search style field with the hairline fill (#eaeef6), 100px radius, 8px 40px 8px 16px padding and 40px height.
- **card**: a white surface, 8px radius, 24px padding, navy text and the soft shadow above.
- **nav** and **link**: white backgrounds with #454f5f text; links are 20px medium with 12px 12px 16px padding.
- **footer**: a full blue (#2957c8) band with white text.

The design system's own component list (Buttons with ButtonContained and ButtonGroup, Badge, Checkbox, Radio, Input, Textarea, Select, Slider, Loader, Charts, Tooltip, Snackbar, StepIndicator, ChoiceCard, FormField, SelectAdvanced, DataTile, Table, ButtonSplit, List) was read from its navigation, and the Buttons page shows primary, warning and danger variants in large, medium and small sizes with a "light" variant for each. The live demos render in frames that the extractor cannot reach, so none of their computed values are tokens.

## Design System Architecture

Foyer maintains a public design system documented at [design.foyer.lu](https://design.foyer.lu/), a zeroheight site titled "Foyer Design System" and described as "Foyer Global Guidelines & Design System". Its home page lists four areas: Design Guidelines, Development Guidelines (a documented component system), Identity Guidelines (a central database of visual resources based on colors, shapes and design principles) and Copywriting Guidelines. The top navigation offers Get started, Guidelines, Composants and an Assets Library at [assets.foyer.lu](https://assets.foyer.lu/). The Guidelines section covers accessibility, animations, compatibility, disabled versus read-only, data formatting, error handling, loading handling and testing.

The Composants section is organised in an atomic hierarchy: Ions (Typography, Couleurs, Corner Radius), Atomes (Buttons, Badge, Checkbox, Radio, Input, Textarea, Select, Slider, Loader, Charts, Tooltip, Snackbar, StepIndicator, Placeholder) and Molecules (ChoiceCard, FormField, SelectAdvanced, DataTile, Table, ButtonSplit, List). The [Couleurs page](https://design.foyer.lu/4280666a7/p/00d34b-couleurs) publishes the color scales as CSS custom properties with an `--fds-primary` prefix, and notes separate sets for Foyer Belgique and Foyer Finance. The [Typography page](https://design.foyer.lu/4280666a7/p/051756-typography) says fonts are already included in the CORE package and documents the font-family declaration. Component class names follow a `ButtonContained is-primary is-light is-small` pattern. The documentation is flagged "In review" or "In progress" on several pages, so it is a living system.

## Do's and Don'ts

Do reserve #2957c8 for actions and the footer, and use #0736a8 for hover. Do alternate white and #f8f9fc bands instead of adding borders. Do pair warm family photography with flat blue illustration and give every section one clear headline. Do keep copy short and second-person.

Don't mix in additional brand blues; the system has one primary scale. Don't apply the pill radius to application form controls: the design system asks for 4px on buttons and fields and 8px on large containers. Don't use Barlow inside Inter-based application screens or the reverse without checking which surface you are on. Don't use success, warning and danger colors decoratively; they are for status.

## Responsive Behavior

The display headline steps from 32px (48px line) down to 26px (39px line) on a 390px viewport; other type sizes were not measured separately on mobile. The desktop capture shows a short pill, an icon button and a hamburger menu rather than a link row (measured at desktop only). The hero tiles are a horizontal row of four on the captured desktop page; their narrow-screen behavior was not captured. Keep button heights at 41px or more for touch, and keep the pill shape at every width.

## Iteration Guide

1. Begin with canvas #ffffff, ink #3b4856 and Barlow 16px/24px body.
2. Add the single blue #2957c8 for pills (50px or 200px radius) and for the footer, hover #0736a8.
3. Set headlines at 32px weight 500 (26px on mobile) and section headings at 20px bold in navy #041d58 or blue.
4. Alternate sections with #f8f9fc, using photography on one side and illustration or icon columns on the other.
5. Use cards with an 8px radius, 24px padding and the soft navy-tinted shadow.
6. When designing application screens, switch to the design-system rules: Inter, 4px radii on buttons and fields, and the Success, Warning and Danger scales.
