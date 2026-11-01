---
version: alpha
name: Boon Rawd Brewery
category: "Thai Brands"
description: "Boon Rawd Brewery corporate site (home of the Singha brand): a full-bleed brewery photograph, a gold (#be9639) angular menu panel, white Galileo type at 31px and 70px, square corners, and a charcoal (#323637) page ground."

colors:
  canvas: "#323637"
  ink: "#ffffff"
  primary: "#be9639"
  on-primary: "#ffffff"
  gold-alt: "#bd9538"
  gold-bright: "#e1b424"
typography:
  display:
    fontFamily: Galileo, Arial, sans-serif
    fontSize: 46px
    fontWeight: 500
    lineHeight: 50.6px
  title:
    fontFamily: Galileo, Arial, sans-serif
    fontSize: 70px
    fontWeight: 700
    lineHeight: 56px
  menu:
    fontFamily: Galileo, Arial, sans-serif
    fontSize: 31px
    fontWeight: 400
    lineHeight: 24.8px
rounded:
  none: 0px
spacing:
  s1: 6.2px
  s2: 8px
  s3: 18px
  s4: 20px
  s5: 50px
  s6: 80px
  s7: 120px
components:
  menu-item:
    textColor: "{colors.ink}"
    typography: "{typography.menu}"
    rounded: "{rounded.none}"
    padding: 6.2px 31px 6.2px 50px
---

# Boon Rawd Brewery

## Overview
The measured page is https://www.boonrawd.co.th/, titled Boon Rawd Brewery Co., Ltd., the corporate site of the company behind the Singha brand. The page offers English and Thai (EN/TH) and its top navigation lists Home, Career, Contact Us and Singha Online Shop plus a Facebook link. The main menu has five entries: About Us (Company Profile, History, Board of Directors), Our Group, Products (Beers and Alcohols, Beverages, Snacks and Foods), Partnerships (Business, Sports) and CSR. A cookie notice is also present on the page.

This is a corporate presentation rather than a retail storefront. The first screen is a single wide photograph of the brewery buildings beside a river under a pale sky, overlaid by a large gold angular panel that holds the main menu in white capitals, and the headline "Boon Rawd Brewery" set in white at the lower right with a thin gold rule beneath it. The logo (a heraldic lion with the words Singha Corporation) sits at top left. There are no product shots, prices or promotional banners on the home view; the company's own architecture and a restrained gold-and-white graphic language carry the identity.

## Colors
The page body measured as charcoal `canvas` (#323637), with white (`ink`, #ffffff) as the dominant text colour. The brand accent is gold: #be9639 (`primary`) is the most-read text colour after white, #bd9538 (`gold-alt`) is a near-identical second gold, and #e1b424 (`gold-bright`) appears in a small amount of text such as the active "Home" link. In the capture the gold appears as the large angled panel and the thin rule, with white type on top of it (`on-primary`, #ffffff). A bootstrap-style blue (#337ab7) was also measured on the h1 text but is a framework default link colour and is not a brand colour, so it is excluded.

Imagery supplies the rest of the colour: muted blue-grey sky and water, warm brick and beige buildings. Keep UI chrome to gold, white and charcoal so the photograph remains the dominant colour field.

## Typography
Every measured character is set in Galileo (regular and bold faces loaded) with Arial and generic sans-serif as fallbacks. The measured scale is: h1 at 46px weight 500 with a 50.6px line height (`display`); the page title "Boon Rawd Brewery" at 70px weight 700 on a 56px line (`title`); and the menu items at 31px weight 400 on a 24.8px line (`menu`). Other measured sizes are 18px, 24px and 52px. Casing follows the capture: menu items and nav links are uppercase, the page title is in title case.

Font substitutes: Galileo is a licensed face. If it cannot be loaded, Arial is the site's own declared fallback; a humanist or squared sans such as Khand or Rajdhani would approximate the slightly technical look but is not what the site uses.

## Layout
Content is anchored to the left and right edges rather than centred: the logo and nav row spans the top with a thin horizontal rule beneath it, the menu panel hugs the left edge and bleeds off it, and the page title is right-aligned near the bottom. Measured spacing values are 6.2, 8, 18, 20, 50, 80 and 120px; the 50px figure is the left padding of a menu item and 120px is the largest gap. The structure is a single hero view with an overlaid menu, and inner pages (About Us, Our Group and the rest) are reached from the numbered menu entries.

## Elevation & Depth
There are no measured card shadows. Depth is created entirely by layering: a photograph at the back, a semi-opaque gold panel over it, then white text. The gold panel's edge is an angled cut, with a measured bottom-right corner rounding of 31px on four elements, which is the closest thing to a radius in the system. Do not add drop shadows or glass blur; keep the layers flat.

## Shapes
Everything else is square (`rounded.none`, 0px). Menu items have no pill, border or background of their own; they are text over the gold panel. Only the large angular panel shape and the single 31px corner break the right angles.

## Components
**Menu item** (`menu-item`): white Galileo 31px regular capitals, numbered in the sub-menu ("01.", "02.", "03." before items such as Company Profile, History and Board of Directors). Padding is 6.2px top and bottom, 31px right and 50px left. Menu items are links, not buttons; the site has no filled primary button on the measured home view, so no button token is declared.

**Top navigation**: a row of small uppercase links (Home, Career, Contact Us, Singha Online Shop), a language selector (EN with a dropdown caret) and a Facebook icon, separated from the hero by a hairline. The active page is highlighted in gold.

**Hero title**: the white 70px bold "Boon Rawd Brewery" with a gold hairline and small gold copyright text below.

**Cookie notice**: appears as a functional banner and is not part of the brand UI.

## Imagery and Voice
Art direction is documentary and corporate: a single daylight photograph of the brewery site, framed wide, with no people, no product close-ups and no filters beyond a slight dimming at the top edge so the white navigation stays legible. Microcopy is brief and institutional. Menu labels are plain nouns (About Us, Our Group, Products, Partnerships, CSR), the sub-menu items are numbered, and the only first-person-company statement on the first view is the name itself. The tone suggests heritage and scale rather than promotion, so avoid exclamation marks, discount language and playful illustration when extending the site.

## Design System Architecture
No public design system, brand guideline or token package was found on the pages opened. The site is a hand-built corporate site whose computed styles contain bootstrap defaults (the blue #337ab7 link colour) and a custom Galileo font. The de-facto system is therefore: one typeface, a gold accent, charcoal and white, and photographic backgrounds. Source page opened: https://www.boonrawd.co.th/. An attempt to read https://www.boonrawd.co.th/about-us returned an HTTP 500 error.

## Do's and Don'ts
- Do let a wide, calm photograph fill the first view.
- Do use gold for graphic shapes and active states, and white for text on top of it.
- Do keep corners square and menus as plain type.
- Don't use the bootstrap blue as a brand colour.
- Don't add filled buttons, shadows or gradient fills on the home view.
- Don't mix in a second typeface; Galileo (or Arial fallback) carries everything.
- Don't present cookie or popup controls as brand components.

## Responsive Behavior
Only desktop and a single measured viewport were used for the tokens, so mobile sizes are not stated here. Mobile menu behaviour was not measured.

## Iteration Guide
1. Choose a photograph first; place the logo top left and a hairline rule below the top links.
2. Overlay one angular gold (#be9639) panel with menu entries in white Galileo 31px capitals.
3. Set the page headline in white Galileo bold at 70px, right-aligned near the bottom with a thin gold rule.
4. Keep every corner at 0px except the single angled panel.
5. When a page needs emphasis, use #bd9538 or #e1b424 gold for a link or active state, never blue.
6. Re-measure at https://www.boonrawd.co.th/ before adding any number not listed in the frontmatter.
