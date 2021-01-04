---
layout: default
tags: snippets
title: GitHub Pages Orphan Branch
---

```bash
git checkout --orphan gh-pages
git rm -rf .
touch README.md
git add README.md
git commit -m 'initial gh-pages commit'
git push origin gh-pages
```
