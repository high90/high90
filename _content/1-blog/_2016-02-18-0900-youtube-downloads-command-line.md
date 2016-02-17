---
title: 'YouTube Downloads from the Command Line'
author: [Bob VanderClay]
categories: [productivity]
tags: [youtube, command line]
banner: oh-no-television.jpg
caption: [Tyne & Wear Archives](https://flic.kr/p/qoGD8j)
---

I had almost given up.

I simply wanted to download a video off YouTube.

Forget Google. There are searches that just seem to exude a certain sliminess that only the Internet can provide.

Fortunately, I came across [`youtube-dl`][1], an open-source, command-line tool to download YouTube videos.

Installation is incredibly easy, with [instructions][2] for Linux, OS X, and an even executable provided for Windows users. I went the Homebrew route:

```
$ brew install youtube-dl
```

The project’s `README` is comprehensive. You can filter downloads by any criteria imaginable, choose which size and format is downloaded, post-process those downloads, and save those files in any format, with a custom naming scheme if so desired.

It’s intimidating for sure. Fortunately, you can ignore most of the options. Most of the time, I use:

```
$ youtube-dl [URL]
```

The URL isn’t anything fancy. No need to inspect the page source for a stream address. The YouTube URL in your browser is all it takes.

This will attempt to download the highest quality of video and audio for the given video (or playlist -— yes, you can export an entire playlist at once). Sometimes I may force a specific video format. The documentation on Format Selection is helpful.

If you’re not used to command-line utilities, I can understand your apprehension. Trust me, it’s worth it.

And if you don’t believe me, feel free to try Google.

Good luck.

[1]:	https://rg3.github.io/youtube-dl/
[2]:	https://rg3.github.io/youtube-dl/download.html