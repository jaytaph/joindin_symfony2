Proof of concept for porting joind.in to Symfony2
=================================================

[![Build Status](https://secure.travis-ci.org/jaytaph/joindin_symfony2.png)](http://travis-ci.org/jaytaph/joindin_symfony2)

## Status
This is a proof-of-concept to port the joind.in website from code igniter to symfony2. There are many reasons why 
this should be considered a "good thing", but it's mostly to get more acquinted with symfony2 itself for me. Note 
that even though most functionality are mapped one-on-one, some things arent because of the fact that either they 
are not used in the current functionality (like the blog), they seem to be better to do it this way (like pagination
of talks/events) or that they should be refactored anyway (like a lot of database stuff).

Note that I'm not attending for this site to become the next joind.in release, allthough I (and others) do see the 
merits in moving on to a better framework and a more sensible codebase (provided I actually manage to create such a
thing :)). So even though I do appreciate bugfixes, contributions and everything else for this project, you might be
better of with fixing the actual (codeigniter) site itself.

If you have any question, ask them at #joind.in channel on freenode IRC network.

## Todo
- Move all the views to nice looking twig templates
- Identify all the business logic and convert into code
- Define all the currently used routing
- Correctly set the relations between the entities
- Probably we want to change the current entity field names as well

- Change all the href's to path's / url's
- Add firewall / security
- Add forms
- Some aggregate counts. For instance, from the event entity, we would like to know how many talks have slides. I
  think there are more performant ways of figuring this out instead of iterating over each talk.

- When going to: /event/view/2/tracks, it should display the "tracks" page
- Sort events when going to /user/view/8/lastcomment

- Add rememberme option
- site.js does create some hrefs with fixed url's (/user/view/'+obj etc), see if we can change that

- OSM type should be custom bundle or something?
- The sidebar should be done through a menu-type of system: https://github.com/KnpLabs/KnpMenuBundle/blob/master/Resources/doc/index.md

- register screen must be styled (forgot password as well)
- fos user emails must be styled

- twitter & facebook connectivity

- v2.1 API implementation

