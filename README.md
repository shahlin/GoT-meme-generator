# Game of Thrones Meme Generator
GoT meme generator retrieves a meme randomly from [r/freefolk](https://www.reddit.com/r/freefolk/) and displays it with its caption. Everytime the page refreshes, a new meme is randomly picked from the subreddit. It only takes posts with images and not text-only posts.

Demo can be found here: **[GoT-meme-generator](http://shahlin.com/projects/demo/GoT-meme-generator)**

## Developers
- Currently, the posts are taken from /r/freefolk sorted by top and the period is set to day with a limit of 100. These settings can be changed in `constants.php`. 
    - TOP_PERIOD: day | month | year | all
    - POSTS_LIMIT: **n** [max 100]
- If you wish to create the same for another subreddit, feel free to change the `SUBREDDIT` constant to the subreddit of your choice.
- To keep the PHP logic separate from the view, I've used [Smarty](https://www.smarty.net/) templating engine.

## Credits
I am not the owner of any of the generated memes. Credit goes to **/r/freefolk** and all of its users for the quality content.
