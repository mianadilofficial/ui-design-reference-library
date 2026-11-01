---
version: alpha
name: "Agence Foudre (Human Social Club)"
category: "Business & Corporate"
description: "Agence Foudre (agencefoudre.com, wordmark Human Social Club) is a French social-media agency site in pink #f29ebd and deep pink #db3c8a on white and forest green #00522d, with Beni 900 poster headlines (94px), Clash Grotesk 500 body, 10px-radius buttons and 20px-radius cards."
colors:
  canvas: "#ffffff"
  ink: "#00522d"
  primary: "#f29ebd"
  on-primary: "#fff8f6"
  pink-deep: "#db3c8a"
  brick: "#932323"
  ink-blush: "#fce5df"
  ink-lilac: "#d1cfe4"
typography:
  display:
    fontFamily: "\"Clash Grotesk\""
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
  display-mobile:
    fontFamily: Beni
    fontSize: 72px
    fontWeight: 900
    lineHeight: 50.4px
  heading:
    fontFamily: Beni
    fontSize: 94px
    fontWeight: 900
    lineHeight: 65.8px
  subheading:
    fontFamily: Beni
    fontSize: 46px
    fontWeight: 900
    lineHeight: 32.2px
  body:
    fontFamily: "\"Clash Grotesk\", sans-serif"
    fontSize: 16px
    fontWeight: 500
  button:
    fontFamily: "\"Clash Grotesk\""
    fontSize: 12px
    fontWeight: 700
    lineHeight: 10.2px
rounded:
  xs: 10px
  sm: 20px
  md: 25px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 20px
  s8: 26px
  s9: 30px
  s10: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 20px
    height: 50px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 20px
  card:
    backgroundColor: "{colors.pink-deep}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
    padding: 30px
  footer:
    textColor: "{colors.on-primary}"
    padding: 0px 30px 30px
---

# Agence Foudre (Human Social Club)

Measured from https://www.agencefoudre.com/ (page title "Agence social media — Agence Foudre", lang fr). The queued brand name was "Foudre, Human Social Club"; the measured site is the agency's own French-language home page, whose first-screen wordmark reads "HUMAN SOCIAL CLUB" over the label "Agence social média". The page is very long (scrollHeight 22942px).

## Overview

The first screen is nearly empty white space with two round pink icon buttons at the top corners (a menu button at left, a WhatsApp-style button at right), the small lilac label "Agence social média", and the wordmark "HUMAN SOCIAL CLUB" in two lines of heavy condensed capitals, the first in deep pink #db3c8a and the second in light pink #f29ebd. Below are a team photograph with rounded corners, a dark olive "Case du mois" project card ("LE SAC DU BERGER" with tags Création de contenu, Community management, Stratégie social media and a "Voir le case" button), and the hero statement "NOUS SOMMES LE COURANT, VOUS ÊTES L'HISTOIRE."

The opened page lists these section headings: "Nous électrisons vos réseaux,", "Nous les rendons, sociaux", "C'est viser juste et FRAPPER FORT.", "Raisonner pour mieux: résonner.", "Nous préfèrerons cet ordre. Toujours.", "Pourquoi choisir Foudre", "Petites questions, grandes réponses" and "Racontez-nous." The navigation items are Home, Agence, Projets, Expertises, FAQ, Contact. Calls to action include "Discuter avec Margaux", "Consulter le projet", "Explorer", "Lancer le quiz", "Étape suivante" and "Envoyer ma demande". The voice is playful French wordplay (courant as both electric current and trend), with lightning-bolt emoji in the page text and a mini quiz of three questions as the contact path.

## Colors

Measured background areas: forest green #00522d (weight 2140), deep pink #db3c8a (1168), brick red #932323 (270), brown #604a34 (213), pink #e878b2 (156) and olive #444325 (99). Text colors by characters: cream #fff8f6 (4508), deep pink #db3c8a (861), green #00522d (160), blush #fce5df (91), light pink #f29ebd (53) and lilac #d1cfe4 (19). No root variables are declared.

- **canvas #ffffff**: the page background at the top of the page.
- **ink #00522d**: the body text color on the root element and the large green sections.
- **primary #f29ebd**: the fill of the "Lancer le quiz" and "Explorer" buttons; **on-primary #fff8f6** is the button text and the main text color on dark and colored sections.
- **pink-deep #db3c8a**: the headline color on white and the fill of the "Plus de projets ?" card.
- **brick #932323**: a deep red section fill.
- **ink-blush #fce5df**: pale blush text, **ink-lilac #d1cfe4**: the small "Agence social média" label.

The brown #604a34, pink #e878b2 and olive #444325 fills were measured on sections and the project card but are not in the token set because only the generated tokens were retained.

## Typography

Fonts loaded: Clash Grotesk (400 and 700, with 500 used for body) and Beni 900. Clash Grotesk is a commercial/licensed family distributed by Fontshare; Beni is a heavy condensed display face, and neither is verified here as freely licensed beyond what the measurement shows. Where they are unavailable, a heavy condensed grotesque and a geometric sans are the closest generic stand-ins.

- **heading**: Beni 900, 94px, line-height 65.8px (0.7 of the size). Used for "NOUS ÉLECTRISONS VOS RÉSEAUX,".
- **subheading**: Beni 900, 46px, line-height 32.2px, for card titles such as "Stratégie social media".
- **display-mobile**: Beni 900, 72px, line-height 50.4px: the "Human Social Club" wordmark as measured on the mobile pass.
- **display**: Clash Grotesk 700, 20px, line-height 24px, the h1 "Agence social média" label.
- **body**: Clash Grotesk 500, 16px, the dominant size (3998 characters).
- **button**: Clash Grotesk 700, 12px, line-height 10.2px.

Other measured sizes: 12px (503 characters), 24px (402), 130px (74) and 80px (66). Weight use: 500 (3538 characters), 400 (792) and 700 (763). Beni's line-height is always 70% of its size, so lines of poster text sit tightly together.

## Layout

The page is a long single column with generous empty space between blocks. Content blocks are asymmetric: the wordmark at the left margin, a card at the right, a photo in the center. Cards measure 623px wide by 351px high (the "Plus de projets ?" card) with 30px padding. The footer is 1228px high with padding 0px 30px 30px. The measured spacing tokens are 5px, 7px, 8px, 10px, 12px, 15px, 20px, 26px, 30px and 60px.

## Elevation & Depth

No box shadows were measured. Layering is by color: colored cards (#db3c8a, #932323, the olive project card) over white or green fields, and by overlap of the photograph with the headline blocks in the capture. The floating round header buttons sit on the white page with a pink fill and no shadow.

## Shapes

Radii measured: 10px (25 elements, buttons), 20px (21, cards and the large image), 25px (11), and 50% (9, the round icon buttons and badges). Buttons are rounded rectangles at 10px, tags in the project card are small pills. The token set also carries `pill: 9999px` for tags.

## Components

- **button-primary**: "Lancer le quiz", background #f29ebd, text #fff8f6, Clash Grotesk 700 12px, radius 10px, padding 20px, height 50px, width 116px.
- **link (button-style)**: "Explorer", same fill, text, radius and padding, height 29px, width 142px.
- **card**: background #db3c8a, text #fff8f6, radius 20px, padding 30px; the "Plus de projets ?" card carries a 94px Beni title and an "Explorer" link.
- **round icon buttons**: 50% radius, pink fill, in the header corners; they open the menu and a messaging link.
- **project card**: olive field with a photo, a Beni title and pale tag pills.
- **footer**: text #fff8f6 on a dark field, with the "Racontez-nous." contact quiz ("Un mini quiz, 3 questions") and legal links.

## Design System Architecture

No public design system or brand guideline is published: the opened page links only to social profiles, "Confidentialité", "Mentions légales" and the developer credit "Site par Troa". The measurement found no root custom properties, so the de-facto system lives in page CSS: two fonts (Clash Grotesk and Beni), a pink-and-green palette, and a repeated 10px/20px radius pair. Source page: https://www.agencefoudre.com/.

## Do's and Don'ts

- Do set headlines in Beni 900 with line-height at 70% of the size and mix deep pink #db3c8a with light pink #f29ebd.
- Do use Clash Grotesk 500 at 16px for running text and 700 at 12px for buttons.
- Do make buttons 10px-rounded pink #f29ebd with cream #fff8f6 labels.
- Do use 20px-radius colored cards and real team photography.
- Don't add shadows; none are measured.
- Don't treat emoji strings in the page text as icon tokens.
- Don't add colors beyond the measured pink, green, brick, brown and olive fields.

## Responsive Behavior

The mobile pass recorded: the wordmark "Human Social Club" at 72px Beni with line-height 50.4px in light pink #f29ebd; the h2 "Nous électrisons vos réseaux," at 54px with line-height 37.8px; body text at 14px; the "Lancer le quiz" button at 10px with line-height 8.5px and the same 10px radius. Mobile size frequencies: 14px (3469 characters), 16px (1020), 10px (558), 32px (236), 54px (206), 72px (74), 40px (66), 114.972px (31). Menu and layout behavior at mobile width were not measured.

## Iteration Guide

1. Start with white #ffffff, ink #00522d and the pink pair #db3c8a and #f29ebd.
2. Set the wordmark and section titles in Beni 900 at 94px/65.8px.
3. Write running text in Clash Grotesk 500 16px.
4. Build buttons at 50px high, 10px radius, padding 20px.
5. Use full-color rounded cards at 20px radius with 30px padding.
6. Keep copy in French, playful and second-person; use short capitalized poster lines.
