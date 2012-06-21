Proof of concept for porting joind.in to Symfony2
=================================================

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

- All the rest I forgot
