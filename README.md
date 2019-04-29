# friend flag
Friend Module for Drupal
Very simple "friend" module built upon Flag module. Then install this module. Need to create a user flag called friend. The machine name of the link must be 'friend' to work.  Choose the AJAX link for the link type, you'll also likely want to check the box 'Permissions for users to flag themselves.' and then deny the permission.  Note, you need to be sure not to grant permission for general 'flag friend' permission as well as the 'flag friend own profile'.  They should only have 'Flag friend other's profile' and 'Unflag friend other's profile'

This module will then  create a block for friend activity. The block is table with two columns: friend requests (with a link to add the user as a friend), and a friends column. Principle is a user clicks the flag onanother user, that is a friend request. If two users each click the friend flag on the other's profile page, they are friends.

Screenshots available at https://www.drupal.org/sandbox/bryantt/2987656

For most users, you'll only want their "friend" block visible to them and on a certain page. If this is the case, add the block via Block Layout and restrict access via the Block Layout under structure.


 
