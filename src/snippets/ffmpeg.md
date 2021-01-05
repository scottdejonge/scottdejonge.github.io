---
layout: default
tags: snippets
title: ffmpeg
---

## Compress

```bash
ffmpeg -i input.mp4 -vcodec libx264 -preset slow -crf 28 output.mp4
```

## GIF To MP4

```bash
ffmpeg -i input.gif -c:v libx264 -pix_fmt yuv420p -movflags +faststart output.mp4
```

## Greyscale

```bash
ffmpeg -i input.mp4 -vcodec libx264 -crf 36 -vf hue=s=0 exports/test.mp4
```

## Image from Frame

```bash
ffmpeg -i input.mp4 -ss 00:00:4 -vframes 1 poster.jpg
```

## Image Poster

```bash
ffmpeg -i input.mp4 -f mjpeg -vframes 1 -ss 0 output.jpg
```

## Scale

```bash
ffmpeg -i hero.mp4 -s 1280x720 output.mp4
```
