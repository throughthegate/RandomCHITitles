# Random CHI Title Generator

The Random CHI Title Generator generates random-ish titles for CHI Papers. See it in action at http://richmondywong.com/chigenerator/ or on Twitter, [@RandomCHITitles](https://twitter.com/randomchititles). This project is only for fun, and is not associated with the ACM or SIGCHI.

There's a lot of legacy stuff in here, early on I wanted to make something easy & fast to push out, so there's a lot of (not so well written) code in PHP and things in arrays, which was easy at first, and more things got built on top of that. Also it's not written in the most concise manner, nor in the most extendable way...

Most words in the matrix come from a selection of CHI papers from 2014-2016, plus some other random words thrown in. Any contributions in adding additional content would be great! 

## Using matrix.php
matrix.php does all the work of putting together a title, and the title is saved at the end in the variable `$full`. If you include matrix.php in another file, you should be able to call the variable `$full` and use the title stored there however you'd like!

## Explaining matrix.php
Titles are pretty much pre-structured, and the randomness comes from choosing what words or phrases are placed in that structure. Currently these words and phrases are divided into 6 arrays: `$nouns, $prelude, $first_verb, $adj, $topic, $connector, $context`. Titles are made up of 2 parts: the pre-colon, and the post-colon part, in the form of:

[Pre-colon] : [Post-colon]

### Pre-colon

Each of these is further broken down into other parts. The Pre-colon section has a chance of being either a **project** or **phrase**. 
A **project** is made of two random items from `$nouns` (ex: CamLight, or SemiWiki). 

A **phrase** is made of an item in the form of `$topic $connector $topic`. (ex: [Politics] [as] [Affect], or [Collaboration] [for] [Mental Models].

### Post-Colon

The title post-colon is made of an optional prelude, a verb, an optional ajective, a topic, a connector, and a context. This takes the form of `($prelude) $first_verb ($adj) $topic $connector $context`, where parentheses indicate an optional variable.

**Preludes** (`$prelude`) are introductory phrases to titles (ex: "Envisioning," "An Investigation of," or "Reflections on").

**Verbs** (`$first_verb`) are the actions that our fictional researchers are doing (ex: "comparing", "exploring", or "prototyping").

**Topics** (`$topic`) are objects, sites, or programs of study (ex: "Behaviors", "Attitudes", "Infrastructure", "Data Structures", "Drawings").

**Adjectives** (`$adj`) are words that modify topics (ex: "User", "Digital", "Automated", "Human Centered").

**Contexts** (`$context`) is the context in which a topic is studied (ex: "Everyday Life", "Novice Users", "Online Communities").

**Connectors** (`$connector`) are phrases that connect topics to contexts (ex: "in", "surrounding", "in the case of").

Putting that together, an example post-colon title might be: "(Reflections on) Prototyping (Digital) Attitudes in Online Communities" , where parentheses indicate an optional word or phrase.
