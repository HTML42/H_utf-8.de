<h1>UTF-8 or UTF-16?</h1>
<p>
    In the early computing days, single and double byte character encodings were developed to support various languages. This meant that software developers needed to build a version of their application for every language that they wanted to support. The software could have a Chinese version, Russian version or an English version. The developer would end up with a chunk of individual language codes that needed testing, updating, maintenance and support that was not just feasible.
</p>
<p>
    The world turned to ASCII, with its binary values of zeros and ones e.g. 1000001, totally 7 bits for its character encoding, but ASCII also had a problem! It could not represent extended characters, accents and non-English alphabets found in European, Korean, Chinese or Japanese languages.
</p>
<p>
    More research work on character encoding took us to ISO Latin, which is represented as ISO-8859-1 for UNIX and Windows-1252 for Windows. This single-byte character set, supported the major European languages such as French, Spanish, and German as well as multiple languages from around the world. The trouble is that many of the Eastern European and Baltic languages, still needed a different encoding character set referred to as ISO Latin 2.
</p>
<p>
    Then came along Unicode with encoding support for many languages worldwide. Unicode enabled companies with truly global ambitions to reach their customers! Thinking of marketing to China, Japan, Korea, or writing in Arabic, Hebrew or even Turkish languages? Unicode has got your back with either the single character based UTF8 or double character based UTF16.
    UTF-8: UTF-8 is a single-byte character encoding standard that uses 8-bits blocks to represent a character on the internet. It accounts for 86.7% of all web pages and is by far the most commonly used character encoder of languages. The major advantage of using UTF-8 character encoding is that all ASCII characters will remain as single-byte charset, hereby enabling the web content developer to keep the underlying HTML markup in single-byte ASCII to save data space.
</p>
<p>
    UTF-16: UTF-16 is another widely accepted encoding standard that uses 16-bits character code points. It works just like UTF8, but instead it assigns double-bytes for each character that needs to be coded instead of single-bytes that UTF-18 uses.
</p>