---
version: alpha
name: MoMA
category: "Culture & Events"
description: "The Museum of Modern Art (moma.org): a white #ffffff canvas with black #000000 type set in the museum's own MoMA Sans at weight 900 with tight negative tracking, square 0px corners everywhere, black buttons, and flat full-width campaign bands in brand green #8fc421, teal #6bdcc5 and blue #00b7f2."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#6bdcc5"
  surface-footer: "#444444"
  surface-subtle: "#eeeeee"
  ink-secondary: "#767676"
  ink-muted-alpha: "#0000008a"
  ink-on-dark-muted: "#ffffff45"
  label-magenta: "#b33370"
  band-green: "#8fc421"
  band-teal: "#6bdcc5"
  band-blue: "#00b7f2"
typography:
  display:
    fontFamily: "\"MoMA Sans\", \"MoMA Sans\", Helvetica, sans-serif"
    fontSize: 60px
    fontWeight: 900
    lineHeight: 60px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: "\"MoMA Sans\", \"MoMA Sans\", Helvetica, sans-serif"
    fontSize: 32px
    fontWeight: 900
    lineHeight: 32px
    letterSpacing: "-0.64px"
  heading:
    fontFamily: "\"MoMA Sans\", \"MoMA Sans\", Helvetica, sans-serif"
    fontSize: 40px
    fontWeight: 900
    lineHeight: 40px
    letterSpacing: "-0.8px"
  body:
    fontFamily: "\"MoMA Sans\", \"MoMA Sans\", Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"MoMA Sans Bold\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 900
    lineHeight: 18px
  nav:
    fontFamily: "\"MoMA Sans\", \"MoMA Sans\", Helvetica, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 10px
  link:
    fontFamily: "\"MoMA Sans\", \"MoMA Sans\", Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 900
    lineHeight: 18px
    letterSpacing: "-0.36px"
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 5.28px
  s3: 5.94px
  s4: 8px
  s5: 10px
  s6: 13.5px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 22px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 10px
    height: 48px
  link-button:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 8px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 8px
  text-input:
    backgroundColor: "{colors.band-teal}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 0px 0px 16px
    height: 48px
    borderColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 64px 0px
---

# MoMA

## Overview

The Museum of Modern Art's website (moma.org, page title "The Museum of Modern Art, New York City | MoMA") is an editorial, poster-like page: a white canvas, black type in the museum's own MoMA Sans at an extra-heavy 900 weight, and imagery from the collection and the galleries doing the visual work. The black MoMA wordmark sits top left; the header lists Visit, Exhibitions and events, Art and artists, Store and a search icon, with Membership, Donate and Tickets at the top right.

The home page is a long scroll of clearly labelled modules — "Welcome / Explore art and ideas at MoMA." with opening hours and a "Plan your visit" button, an "Exhibitions" carousel with arrow controls, a grid of collection works under "Art and artists in our collection", "Events for everyone", "Your day at MoMA", "New ideas and perspectives", "From the Design Store", a black "MoMA PS1" block, a pale grey sponsor strip and a dark grey footer. Between modules, full-width flat colour bands carry campaigns and calls to action: lime green ("Support experimentation, learning, and creativity"), bright blue ("Free admission during UNIQLO Friday Nights") and teal (the newsletter sign-up). The voice is short, direct and inviting ("Join us for films, performances, art making, talks, and more."). The tone is institutional confidence expressed through heavy type and flat colour rather than ornament.

## Colors

- **Canvas `#ffffff`** — the body background and the dominant area on the page.
- **Ink `#000000`** — the most-read text color, all headings, and the fill of buttons. Primary is also `#000000`: MoMA's action color is black.
- **On-primary `#6bdcc5`** — the text color of the measured primary CTA, the black "Subscribe" button inside the teal newsletter band; the button echoes the band colour. Elsewhere black buttons such as "Plan your visit" carry white `#ffffff` text.
- **Ink secondary `#767676`** — `--color--gray--767`, used for secondary metadata such as artwork dates and "Through May 2, 2027" lines.
- **Ink muted alpha `#0000008a`** — black at 54% alpha, a measured text color for de-emphasised copy.
- **Ink on dark muted `#ffffff45`** — white at 27% alpha, measured text on dark surfaces.
- **Label magenta `#b33370`** — a measured text color used for small category labels in the editorial section.
- **Surface footer `#444444`** — `--color--gray--444`, the footer background.
- **Surface subtle `#eeeeee`** — `--color--gray--eee`, the sponsor strip ("MoMA would like to thank our major partners").
- **Band green `#8fc421`** (`--color--brand--7`), **band teal `#6bdcc5`** (`--color--brand--9`) and **band blue `#00b7f2`** (`--color--brand--10`) — the measured full-width campaign band backgrounds.

The stylesheet declares a twelve-colour brand set (`--color--brand--1` to `--color--brand--12`, from `#f752bd` pink and `#e82046` red through `#fac300` yellow to `#ab79e6` violet), a full grey ramp from `--color--gray--111` to `--color--gray--eee`, and `--color--red #e42d00`. Only the colours listed above were measured on visible home-page elements.

## Typography

The site uses MoMA Sans throughout; the loaded faces are MoMA Sans 400 and 900 (roman and italic) plus a "MoMA Sans Bold" face used on form controls, and the CSS also declares MoMA Sans Condensed, MoMA Sans Store and MoMA Sans Medium faces. The `:root` variables describe the type model directly: `--typography--weight: 900`, `--typography--tracking: -0.020`, `--typography--leading: 1`, `--typography--cap-height: 0.75` and `--typography--x-height: 0.559`. That -0.02em tracking appears in every measured heading.

- **Display** — 60px / 60px, weight 900, letter-spacing -1.2px ("Welcome").
- **Heading** — 40px / 40px, weight 900, letter-spacing -0.8px (section titles such as "Exhibitions", "MoMA PS1").
- **Body** — 18px / 24px, weight 400. 18px is the most-read size on the page.
- **Link** — 18px / 18px, weight 900, letter-spacing -0.36px (e.g. "Plan your visit").
- **Button** — MoMA Sans Bold 18px / 18px, weight 900.
- **Nav** — 10px / 10px, weight 400 (the smallest measured link style).

Other measured sizes are 30px (-0.6px tracking), 22px (-0.44px, used in the header and footer) and 16px. Only two weights carry the system: 900 for anything that is a title, link or label, and 400 for running text.

**Substitutes**: MoMA Sans is proprietary. The CSS fallback is Helvetica; a heavy neo-grotesk such as Inter Black or Helvetica Now Display Black with -0.02em tracking and leading 1 is the closest public stand-in.

## Layout

The desktop viewport is 1280px; the header band spans x=46 to x=1219 and the "Welcome" band x=44 to x=1233. The CSS declares `--page-spacing: 2.4rem`, `--page-width--maximum: 128rem` and an uneven two-column model (`--uneven-column-width--side` is one third of the layout minus gutters, `--uneven-column-width--main` the rest). The capture shows that model in use: section titles and short intros sit in the narrow left column ("Art and artists in our collection", "Events for everyone") while the content grid fills the wide right column. Collection works appear in a three-column grid of artwork thumbnails with artist name in bold and title in italic below.

Measured gaps include 22.5px, 48px, 32px, 64px and 96px; the most common padding is 8px, with 48px for larger blocks. `--header-height` is 8.3rem, with a reduced `--header-height--headroom` of 5.6rem.

## Elevation & Depth

No box-shadows were measured, and no element has a rounded corner. Depth is entirely flat: blocks are separated by full-bleed colour changes (white, campaign colour bands, black for MoMA PS1, `#eeeeee` for sponsors, `#444444` for the footer), by 1px black rules (black is the most frequent measured border colour) and by photography. Focus is the one declared outline treatment: `--focus-thickness: 0.2rem` with `--color--focus: #000`.

## Shapes

`desktop.frequencies.borderRadii` is empty in the extraction: every rendered element on the home page computes a 0px radius. Buttons, inputs, images, colour bands and the footer are all hard rectangles. The only rounded value anywhere in the variables is `--focus-radius: 0.4rem` for focus rings, which was not observed on the home page. The square geometry matches the MoMA wordmark, which is a heavy, tightly set block of letters.

## Components

- **Primary button** — black `#000000` fill, MoMA Sans Bold 18px/900, 48px tall, 0px 10px padding, square corners. In the teal newsletter band its label is `#6bdcc5`.
- **Link button** — black fill with white 18px/900 text and 8px padding ("Plan your visit"); a trailing arrow appears on text links such as "Find your favorites →" and "View the calendar →".
- **Text input** — 48px tall, teal `#6bdcc5` fill matching its band, 1px solid black border, 16px left padding, square corners, MoMA Sans Bold 18px.
- **Header** — white background, wordmark left, primary links in heavy black, utility links Membership (with a chevron), Donate (black button) and Tickets (blue button) top right.
- **Carousel** — exhibition cards with large images, a bold title and a grey date line, controlled by black arrow buttons.
- **Campaign band** — full-width flat colour, heavy headline on the left, short copy and a bold arrow link on the right.
- **Footer** — `#444444` background, white 22px/900 links (About us, Support, Research, Teaching, Magazine, Log in), addresses for MoMA and MoMA PS1, social icons, newsletter input and 64px vertical padding.

## Design System Architecture

No public design system or brand guidelines are published: the press site (https://press.moma.org/) links only to image-use terms, FAQs and contact, and https://www.moma.org/about returned HTTP 403 to the fetch tool. The de-facto system is readable from the shipped CSS custom properties. Colours are namespaced `--color--{family}--{step}` with an `--rgb` twin for alpha compositing (`--color--brand--9` and `--color--brand--9--rgb: 107,220,197`), plus semantic aliases (`--color--collection`, `--color--session: var(--color--brand--10)`, `--color--ps1`). Membership tiers get their own `--color--membership--1…18` palette. Typography is parameterised (`--typography--size`, `--typography--weight`, `--typography--tracking`, cap-height and x-height ratios), and layout is expressed with `--page-spacing`, `--page-width--*` and the `--uneven-column-width--*` pair. A `--rem-conversion: 0.1rem` variable indicates a 10px-rem convention in the code.

## Do's and Don'ts

**Do**
- Set every title, link and label in MoMA Sans 900 with -0.02em tracking and leading 1.
- Keep body text at 18px/24px weight 400 in black on white.
- Use black as the action colour and white or the band colour for the label.
- Separate content modules with flat, full-width colour bands from the brand set.
- Put section titles in the narrow left column and content in the wide right column.

**Don't**
- Don't round any corner; the measured radius is 0px everywhere.
- Don't add drop shadows or gradients.
- Don't introduce a mid weight for headings; the system jumps from 400 to 900.
- Don't use more than one campaign colour within a single band.
- Don't treat the swiper library's `#007aff` theme variable as a brand colour.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 "Welcome" drops from 60px to 32px (letter-spacing -0.64px) and the h2 from 40px to 28px (-0.56px). Body paragraphs measured 16px with a 21.3333px line-height. The most-read mobile sizes are 16px, 24px, 20px, 28px and 18px. Content bands run from x=22 to between x=367 and x=385, a 22px side gutter. The mobile header is 83px tall with two visible header links ("Tickets" among them) and no visible menu toggle was detected. The footer band (`#444444`) measured two columns on mobile. The primary CTA remained the 48px black "Subscribe" button. Breakpoints and carousel behaviour were not measured.

## Iteration Guide

1. Start with a white canvas, black ink and MoMA Sans (or a heavy grotesk substitute) at 900 for everything that is not running text.
2. Apply -0.02em tracking and line-height 1 to all headings: 60px display, 40px section, 30px and 22px intermediates.
3. Keep corners square and surfaces flat; separate modules with colour bands, black rules and photography.
4. Pick band colours only from the brand set (`#8fc421`, `#6bdcc5`, `#00b7f2` measured; others declared).
5. Make buttons black, 48px tall, with 10px horizontal padding and bold 18px labels.
6. Use the uneven two-column layout: one-third side column for titles and intros, two-thirds main column for content.
