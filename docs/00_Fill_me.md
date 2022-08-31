
Hi. I'm your **Documentation Assistant**. I'll walk you through a process.

Your first step writing a documentation is to **check its structure** thoroughly.
What do you need to gather, as informations, to make it useful and reach the goal of documenting? The structure check will help you figure it out.

Once you've got a good grasp over it, choose your method, but keep in mind that **a useful documentation is one that brings clarity in informations** - nothing less.

Ready?
We'll walk the line, to see who's who.


Readme.md
---------

The Readme.md is specially important because in your version control repository hosting service ( gitlab, bitbucket or else ) it is the **first file** that will be displayed when anyone opens your repo.
Thus, it should provide straightforward **guidance** through the documentation.


Install.md
----------

If anything, the reader will always expect in a **decent** documentation to find install instructions. You might not have much to say, but it's better to say "It installs painlessly" than leave any doubt about it.
Either way, this might help:
- checklists are easy to write, read & process
- any external resources need to be linked
- check your install process yourself. If you fail, you are learning a lesson ;).


User_manual.md
--------------

That's the most graphic part of it and one of the most important parts of the documentation.
Consider the following:
- checklists, still to the rescue ;)
- **variety of scenarios** - they'll be used as module's efficiency test, if a scenario doesn't check your module will not feel reliable.
- pictures! Whenever you can take screenshots of what's happening, please do it.
This part is not only useful to external clients such as Project Managers, it is very useful to the engineers and end client who will ask for documentation - this is the part they will expect to have between their hands.


Gears.md
--------

Your work's ability to be **maintained**, **survive** and **thrive** depends **a lot** on this part.
You should document here how your module works, strip naked its gears and make obvious its most important parts. Don't be shy, be methodic, go from the larger picture to the tiny ones. This should be very technical, but contrary to **Implement.md**, this part is not focused on context, it is focused on what supports defining context of your features.
Never hurts to leave hints at how anyone could contribute to the module.

Also, remember that your reader will usually dread quantity and favor quality: make an effort to stay sharp and relevant.


Implement.md
------------

Deeper on the technical side. Some modules will be plug & play but that rarely is the case.
Provide here **instructions to implement** the features of your module within a project. The best way to do it usually is to use **examples** of **concrete cases**. If you've developed the module for a client and are working on the packaging, you've got your fresh example hands on.



Changelog.md
------------
Track your changelog and stress out what **makes a version**. Carefully curated this can be the fastest way to document oneself on the module.
Using ```Seer doc -r``` within a versioned repo you will be able to get an updated version of your changelog ready to be filled.


Are we there yet?
-----------------

Hurray \o/ you've made it.
You have completed your first ( maybe ) documentation. Now to add the cherry on top, complete those steps:
- ask for a review of your work
- upgrade the module's version accordingly
- tag
- git push
- send PR ( review can consist in the PR )

From then if you have documented a major version change, please notify the Capitalisation Manager who will release communication about it and take necessary steps.

Thank you for your service.
See you on the next module ;).
