Proof of concept for porting joind.in to Symfony2
=================================================

## Todo
- Move all the views to nice looking twig templates
- Identify all the business logic and convert into code
- Define all the currently used routing
- Correctly set the relations between the entities
- Probably we want to change the current entity field names as well

- Change all the href's to path's / url's
- Add FOSUserBundle
- Add firewall / security
- Add forms
- Remove things like "<?php echo $this->config->item('site_name'); ?>" inside the templates
- Some aggregate counts. For instance, from the event entity, we would like to know how many talks have slides. I
  think there are more performant ways of figuring this out instead of iterating over each talk.

- All the rest I forgot
