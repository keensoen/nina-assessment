## Rules
- Install the Laravel framework and commit that to your Github repository as
first commit.
- After every ~30 minutes of work please commit (~5 commits) your changes. It
doesn't matter if the code doesn't work or contains debug code etc. as we will
look at the way of working (step 1, step 2, ...).

## Prepare
Add some extra random fields to the User Model and at least 1 relationship with
another Model. Create a Controller that can return all the users (return a
collection no view is needed).

## Challenge
Let's assume we want to filter through the users based on 50+ parameters (ie.
name, age, location, relationships, etc.). How would you do this? You can
demonstrate this with 3-4 parameters that you add to the User Model. Adding all
the scopes to the Model or in the Controller isn't an option as that would bloat
the Model and make it hard to manage.
