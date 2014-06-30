#!/bin/sed -nr

/<pre [^>]*class="idl"[^>]*>/,/<\/pre>/ {
  h
  b cont
}
b 
:cont
s|^.*<pre [^>]*class="idl"[^>]*>(.*)|\1|
s|(.*)</pre>.*$|\1|
s|<[^>]+>||g
p

