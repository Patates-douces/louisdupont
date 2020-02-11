# louisdupont

### Un petit doc en md pour commencer !  

Les doc se font souvent en md, dans un répertoir appelés doc, c'est facile à coder et à trover, pourquoi pas.  
si tu veux voir la mise en forme, appuie sur `view` en haut à droite.  

Pour git, la logique est à peu près toujours la même.  

- Tu commences sur la branche **master**. tu fais `git pull` pour mettre à jour ce que tu as en local dans ta zone de dépôt, elle sera identique au code source :) .  

- Tu vas sur la branche sur laquelle tu veux travailler en faisant `git checkout nomDeLaBranche`. Si tu commence une mission et que tu veux créer une nouvelle branche tu fais `git checkout -b newbranche`.  

- Le réflexe quand tu arrives sur une nouvelle branche : `git rebase origin/master` pour que ta branche se mette à jour avec ton dépôt local. Si tu as bien fait la manip en passant pas master et en faisant `git pull`, ta branche sera donc à jour avec le code source.  

- Quand tu as finis ton travail, tu peux faire `git commit nomdufichermodifié`. Tu peux aussi télécharger **gitg** et taper dans la console `gitg`. tu pourras choisir simplement les modifications que tu souhaites commiter.  

- Enfin avec `git push`, tu mets ton travaille sur git. Git te proposera d'ouvrir une pull request si tu viens d'ouvrir ta branche. Une fois que tu as fini ton travail, il faut changer le label **WIP** en **review**. quand l'autre a revu le travail, il peut faire des commentaires ou dire que c'est ok.  

- Quand tout est bon, on merge avec le code source.
