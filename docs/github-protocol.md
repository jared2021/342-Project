# **Github Protocol**

## Git Branches

- To clone a specific branch use `git checkout <branch name>`, followed by `git
pull`

- To create a branch for your ticket use `git branch <ticket branch>`

- The `<ticket branch>` is the branch being worked on plus the issue number.<br>
<i>Example: Creating a branch for issue #1 on the docs branch would be `git branch docs1`</i>

- To check changes you have made to the branch use `git status`. All the red text directories are places you have edited with your code. Make sure you are in a directory that will include all of your changes.

<!-- TODO: Add any new branch names bellow -->
**Current Branches:** [master](https://github.com/troyerl/342-Project/tree/master), [docs](https://github.com/troyerl/342-Project/tree/docs)

| Note: Pushing to master will require certain privileges to prevent unwanted changes|
| ---------------------------------------------------------------------------------- |

## Git Commits

- If `git status` returns all the code you want to commit use `git add .` to add all your changes to a new commit.

- After adding your changes to the new commit use `git commit -m <your message>` to finish of the commit.

- After committing, to push your code use `git push origin
<ticket branch>`

## Code Review

<!-- TODO: Add a screenshot example of a pull request -->
- After you have committed your code to Github, create a pull request on the [Github]("https://www.github.com") website and ping someone on the team to review your code.

- After you have been approved, you are done and can start working on the next ticket!

| Note: If you have any issues with this process, please leave a message in the slack channel and someone will hopefully get back to you |
| -------------------------------------------------------------------------------------------------------------------------------------- |
