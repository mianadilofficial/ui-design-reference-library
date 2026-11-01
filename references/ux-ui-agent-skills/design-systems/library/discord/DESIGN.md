---
version: alpha
name: Discord
category: "Media & Consumer Tech"
description: "Discord's home page puts white text on a deep indigo (#1a2081) illustrated night sky, with Blurple #5865f2 and white 12px-radius 56px buttons, ABC Ginto Discord Nord uppercase headlines at 44px/700, ABC Ginto Discord body copy, and big 88px-radius translucent feature panels."
colors:
  canvas: "#1a2081"
  ink: "#ffffff"
  primary: "#5865f2"
  on-primary: "#ffffff"
  black: "#000000"
  ink-muted: "#ffffffb3"
  ink-dark: "#23272a"
  header-bg: "#000000cc"
  button-hover-grey: "#c7c8ce"
  light-blurple: "#e0e3ff"
typography:
  display:
    fontFamily: Abcgintodiscordnord, Arial, sans-serif
    fontSize: 44px
    fontWeight: 700
    lineHeight: 37.7143px
    letterSpacing: "-0.44px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Abcgintodiscordnord, Arial, sans-serif
    fontSize: 27px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.27px"
    textTransform: uppercase
  heading:
    fontFamily: Abcgintodiscordnord, Arial, sans-serif
    fontSize: 36px
    fontWeight: 800
    lineHeight: 33.48px
    letterSpacing: "-0.36px"
    textTransform: uppercase
  footer-heading:
    fontFamily: Abcgintodiscord, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  body:
    fontFamily: Abcgintodiscord, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23.9999px
    letterSpacing: 0.32px
  button:
    fontFamily: Abcgintodiscord
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.25px
  button-sm:
    fontFamily: Abcgintodiscord
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
    letterSpacing: 0.25px
rounded:
  xs: 12px
  sm: 16px
  md: 50px
  lg: 60px
  xl: 88px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 16.7px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16.7px 24px
    height: 56px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 24px
    height: 56px
  button-secondary-hover:
    backgroundColor: "{colors.button-hover-grey}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 8px 15px 0px
  button-login:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.black}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.sm}"
    padding: 10px 16px
    height: 39px
  nav:
    backgroundColor: "{colors.header-bg}"
    textColor: "{colors.ink}"
    height: 80px
  nav-link-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
---

# Discord

## Overview

Discord's home page (https://discord.com/, title "Discord - Group Chat That's All Fun & Games") is a long, illustrated night scene. The body background is a deep indigo, `#1a2081`. Over it sit glowing planets, floating characters, the Wumpus mascot and 3D props, with the gradient shifting from navy at the top to bright violet-blue at the bottom. All copy is white. The structure is clear and repetitive: a hero with the uppercase headline "GROUP CHAT THAT'S ALL FUN & GAMES", then six feature panels that alternate the product screenshot left and right. Their titles: "MAKE YOUR GROUP CHATS MORE FUN", "STREAM LIKE YOU'RE IN THE SAME ROOM", "HOP IN WHEN YOU'RE FREE, NO NEED TO CALL", "SEE WHO'S AROUND TO CHILL", "ALWAYS HAVE SOMETHING TO DO TOGETHER", "WHEREVER YOU GAME, HANG OUT HERE".

Midway, a full-width marquee shouts "TALK · PLAY · CHAT · HANG OUT" at 61px between Discord logo glyphs. The page ends with "YOU CAN'T SCROLL ANYMORE. BETTER GO CHAT.", a crowd of illustrated characters, and a footer with a giant "Discord" wordmark bleeding off the bottom.

The tone is playful and conversational ("Discord is great for playing games and chilling with friends, or even building a worldwide community"). The visuals combine flat UI screenshots of the Discord app with soft 3D renders and hand-drawn characters, all lit in Blurple and violet.

## Colors

- **Canvas `#1a2081`.** The body's computed background: the deep indigo under the illustrated sky. The darker and lighter blues seen across the page (`#2d2d74`, `#343683`, `#1a185e` bands) come from the background artwork.
- **Primary `#5865f2`.** Blurple. Discord's branding page lists it as "Blurple: #5865F2". It fills the "Open Discord in your browser" button and the hover state of every header link, and it is the third most frequent colour in the shipped CSS (239 uses).
- **On-primary `#ffffff`.** Text on Blurple.
- **Ink `#ffffff`.** Nearly all text (1,862 characters).
- **Ink muted `#ffffffb3`.** Footer column headings ("Product", "Company") at 70% white.
- **Ink dark `#23272a`.** Text on the white "Download for Mac" button.
- **Black `#000000`.** The largest measured background area (777 units) and the "Log In" text. The branding page lists Black #000000 as a brand colour.
- **Header bg `#000000cc`.** The 80% black of the sticky header.
- **Button hover grey `#c7c8ce`.** The measured hover fill of the white buttons.
- **Light Blurple `#e0e3ff`.** Listed on the branding page; not measured on the home page.

`:root` declares a 400-variable palette as HSL steps (`--brand-130` through `--brand-760`, plus green, red, yellow, teal and pink ramps) for the product UI.

## Typography

Discord's marketing type is a custom cut of ABC Ginto:

- **ABC Ginto Discord Nord** (`Abcgintodiscordnord`, weight 700, with 800 also measured) for all headlines, set uppercase with negative tracking of -1% of the font size. **Display**: 44px/700, 37.71px line height (tighter than the font size), -0.44px. **Heading**: 36px/800, 33.48px line height, -0.36px. The marquee runs at 61px/-0.61px, and the closing line at 48px/-0.48px. The root variable `--font-display-marketing-header` names the stack: "ABC Ginto Discord Nord", "gg sans", serif, "Noto Sans", Helvetica Neue, Helvetica, Arial, sans-serif.
- **ABC Ginto Discord** (`Abcgintodiscord`, 400 and 500) for text. **Body** is 18px/400 with 24px leading and 0.32px tracking. The feature paragraphs run at 20px with 0.32px tracking, the most frequent size (982 characters). **Button** is 18px/400 with 0.25px tracking; the small **button-sm** ("Log In") is 16px/500.
- **gg sans** (`Ggsans`) is loaded as the product UI face, and `gg mono` is declared for code.

ABC Ginto is commercial (Dinamo). If it is unavailable, the declared fallback chain goes to gg sans, Noto Sans and Helvetica.

## Layout

Measured at 1280px wide and 7,717px tall. The header is 80px, translucent black, with the logo at the left, nine centred links (Download, Nitro, Discover, Safety, Quests, Support, Blog, Developers, Careers) and a white "Log In" pill at the right. The hero puts the headline and paragraph in a left column against a large app illustration, with two buttons centred below. The feature section uses wide rounded panels, each with a screenshot on one side and a title and paragraph on the other, sides alternating down the page. The marquee band separates the first three panels from the last three. The footer has a language select and social icons at the left, four link columns (Product, Company, Resources, Policies), and the oversized wordmark below.

The most frequent gaps are 16px, 4px and 8px, with 34.6px, 56px, 48px and 42px between larger blocks; the most frequent paddings are 40px, 20px and 10px. Breakpoint variables declared on `:root` include `--breakpoint-xxs: 480px`, `--breakpoint-768: 768px`, `--breakpoint-1536: 1536px`, `--breakpoint-xxl: 1800px` and `--breakpoint-2500: 2500px`.

## Elevation & Depth

No box shadows were measured on rendered elements at rest. The white buttons gain `rgba(0, 0, 0, 0.2) 0px 8px 15px 0px` on hover (the CSS's `0 8px 15px #0003`, used 26 times). The shipped CSS also carries a glow, `0 2px 52px #452a7c1a, inset 0 0 0 3px #fff3`; it was not measured on a rendered element. Most of the depth is illustrative: 3D props float in front of and behind the panels, planets sit in the background, and the panels are translucent light-blue glass over the indigo sky.

## Shapes

Discord's shapes are big and soft. Buttons use 12px (the most frequent measured radius, 12 elements). The "Log In" pill and the language select use 16px. The feature panels use 88px and 50px radii, so they read as huge rounded slabs; one 60px radius was also measured. The CSS corpus confirms a scale running 8, 12, 16, 32, 40, 48, 56, 64, 72, 88 and 112px. Logo glyphs, characters and props are rounded and bubbly; nothing in the page art is sharp-cornered.

## Components

- **Primary button.** "Open Discord in your browser": Blurple `#5865f2` fill, white ABC Ginto Discord 18px/400, 0.25px tracking, 16.7px 24px padding, 56px tall, 12px radius.
- **Secondary button.** "Download for Mac": white fill, `#23272a` text, same type and radius, 15px 24px padding, 56px tall. Hover turns it `#c7c8ce` and adds the 0 8px 15px shadow.
- **Log In pill.** White fill, black 16px/500 text, 16px radius, 10px 16px padding, 39px tall. Its hover fill is also `#c7c8ce`.
- **Header link.** White 16px text. The hover fills it with Blurple (`rgb(88, 101, 242)` measured on all nine links).
- **Feature panel.** A large rounded (50–88px) translucent panel with an app screenshot, a 36px/800 uppercase title and an 18–20px paragraph.
- **Marquee.** A full-width band of 61px uppercase words separated by Discord glyphs.
- **Language select.** A `#ffffff1a` translucent field with a 16px radius, 56px tall.
- **Footer.** Indigo; `#ffffffb3` column headings, white links, social icons and the giant wordmark.

## Design System Architecture

Discord publishes brand resources at https://discord.com/branding. That page lists the colours (Blurple #5865F2, Light Blurple #E0E3FF, Black #000000), gives logo rules ("Please do not edit, change, distort, recolor, or reconfigure the Discord logo"), offers logo, symbol and banner downloads, and links a full brand kit on Corebook. The marketing site serves its assets (logo, favicon) from `cdn.prod.website-files.com`. The page also ships Discord's product design tokens on `:root`: 400 custom properties with numbered HSL ramps (`--brand-560`, `--green-new-23`, `--red-new-42`), breakpoints (`--breakpoint-768`, `--breakpoint-xxl`), type stacks (`--font-display-marketing-header`, `--font-code`), and mobile-specific spacing (`--mobile-user-row-label-line-height-ios: 22px`). The marketing layer (Ginto, 12px buttons, 88px panels) sits on top of that product palette.

## Do's and Don'ts

**Do**
- Set headlines in ABC Ginto Discord Nord, uppercase, bold, with tight leading and -1% tracking.
- Use Blurple `#5865f2` for the main action and link hover, and white buttons for secondary actions.
- Build sections as large rounded translucent panels on the indigo, illustrated sky.
- Fill the page with playful 3D and illustrated characters around the UI screenshots.
- Keep all copy white on the dark background.

**Don't**
- Don't recolour or distort the logo; the branding page forbids it.
- Don't use small radii on panels or sharp corners anywhere.
- Don't use body text in the Nord display face.
- Don't put Blurple text on the indigo canvas for body copy; text stays white.

## Responsive Behavior

Measured at 390px wide. Headlines drop to **27px** (display-mobile 27px/700 with 24px line height and -0.27px tracking; h2 27px/800 with 24.3px line height). Body text drops from 18px/24px to 16px/19px with the same 0.32px tracking. The Blurple primary button keeps its 56px height, 12px radius and 18px text. The header shrinks to 64px; one header link was measured as visible, and a "Menu" toggle was measured as visible. In the mobile capture both hero buttons span the full width, one above the other. The feature panels run in one column, with the title, then the text, then the screenshot. The footer link groups appear as rows (Product, Company, Resources, Policies) with chevrons. The stylesheet's most frequent media queries are `max-width: 767px` (15), `max-width: 479px` (9) and `max-width: 991px` (7).

## Iteration Guide

1. Start with an indigo `#1a2081` canvas, white text, and an illustrated or gradient sky.
2. Add uppercase ABC Ginto Discord Nord headlines (44px, or 36px for sections; 27px on mobile) with tight leading.
3. Use one Blurple 56px button with a 12px radius, paired with a white secondary.
4. Put features in big rounded (50–88px) translucent panels, with screenshots alternating sides.
5. Add character: floating 3D props, Wumpus, a marquee of verbs.
6. Check the branding page before touching the logo; use only the official files.
