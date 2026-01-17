<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="header">
        <h1>PHP String Functions Showcase</h1>
        <p class="subtitle">Exploring built-in PHP string manipulation functions</p>
    </div>
    
    <div class="container">
        <!-- Changing the Case of Characters -->
        <div class="card">
            <h2 class="card-title"><i class="fas fa-exchange-alt"></i> Changing the Case of Characters</h2>
            <p class="input-string">Original string: "HOLY ANGEL UNIVERSITY"</p>
            <table>
                <tr>
                    <th>Function</th>
                    <th>Description</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td class="function-name">strtolower()</td>
                    <td class="description">Converts a string to lowercase</td>
                    <td>
                        <div class="output">holy angel university</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">strtoupper()</td>
                    <td class="description">Converts a string to uppercase</td>
                    <td>
                        <div class="output">HOLY ANGEL UNIVERSITY</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">ucfirst()</td>
                    <td class="description">Makes the first character of a string uppercase</td>
                    <td>
                        <div class="output">Holy angel university</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">ucwords()</td>
                    <td class="description">Capitalizes the first character of each word in a string</td>
                    <td>
                        <div class="output">Holy Angel University</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">lcfirst()</td>
                    <td class="description">Makes the first character of a string lowercase</td>
                    <td>
                        <div class="output">hOLY ANGEL UNIVERSITY</div>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Counting Characters and Words -->
        <div class="card">
            <h2 class="card-title"><i class="fas fa-calculator"></i> Counting Characters and Words</h2>
            <p class="input-string">Original string: "John Michael Dela Cruz"</p>
            <table>
                <tr>
                    <th>Function</th>
                    <th>Description</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td class="function-name">strlen()</td>
                    <td class="description">Returns the length of a string (including spaces)</td>
                    <td>
                        <div class="output">22</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">str_word_count()</td>
                    <td class="description">Returns the number of words in a string</td>
                    <td>
                        <div class="output">4</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">substr_count()</td>
                    <td class="description">Counts the number of substring occurrences</td>
                    <td>
                        <div class="output">'a' appears 2 times</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">count_chars()</td>
                    <td class="description">Returns information about characters used in a string</td>
                    <td>
                        <div class="output">String contains 14 unique characters</div>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Removing and Replacing Characters -->
        <div class="card card-full">
            <h2 class="card-title"><i class="fas fa-cut"></i> Removing and Replacing Characters</h2>
            <p class="input-string">Original string: "  Hello World! Welcome to PHP  " (with extra spaces)</p>
            <table>
                <tr>
                    <th>Function</th>
                    <th>Description</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td class="function-name">ltrim()</td>
                    <td class="description">Removes whitespace or other characters from the left side of a string</td>
                    <td>
                        <div class="output">"Hello World! Welcome to PHP  "</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">rtrim()</td>
                    <td class="description">Removes whitespace or other characters from the right side of a string</td>
                    <td>
                        <div class="output">"  Hello World! Welcome to PHP"</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">trim()</td>
                    <td class="description">Removes whitespace or other characters from both sides of a string</td>
                    <td>
                        <div class="output">"Hello World! Welcome to PHP"</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">str_replace()</td>
                    <td class="description">Replaces all occurrences of a search string with a replacement string (case-sensitive)</td>
                    <td>
                        <div class="output">"Hello Universe! Welcome to PHP"</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">str_ireplace()</td>
                    <td class="description">Replaces all occurrences of a search string with a replacement string (case-insensitive)</td>
                    <td>
                        <div class="output">"Hello Universe! Welcome to PHP"</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">str_repeat()</td>
                    <td class="description">Repeats a string a specified number of times</td>
                    <td>
                        <div class="output">"PHP!PHP!PHP!"</div>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Other Built-in Functions -->
        <div class="card card-full">
            <h2 class="card-title"><i class="fas fa-code"></i> Other Built-in Functions</h2>
            <p class="input-string">Various strings used for demonstration</p>
            <table>
                <tr>
                    <th>Function</th>
                    <th>Description</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td class="function-name">strrev()</td>
                    <td class="description">Reverses a string</td>
                    <td>
                        <div class="output">"SUINAVLEGNA YLOH" (from "HOLY ANGEL UNIVERSITY")</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">str_shuffle()</td>
                    <td class="description">Randomly shuffles all characters in a string</td>
                    <td>
                        <div class="output">"YLH OALNGUE SNITVRIEY" (shuffled version)</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">str_pad()</td>
                    <td class="description">Pads a string to a certain length with another string</td>
                    <td>
                        <div class="output">"****PHP****"</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">str_split()</td>
                    <td class="description">Converts a string to an array</td>
                    <td>
                        <div class="output">Array split into 3-character chunks</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">strpos()</td>
                    <td class="description">Finds the position of the first occurrence of a substring in a string</td>
                    <td>
                        <div class="output">Position of "ANGEL": 5</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">substr()</td>
                    <td class="description">Returns part of a string</td>
                    <td>
                        <div class="output">"ANGEL" (characters 5-9 from "HOLY ANGEL UNIVERSITY")</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">strcmp()</td>
                    <td class="description">Binary safe string comparison (case-sensitive)</td>
                    <td>
                        <div class="output">"hello" and "Hello" are not equal</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">strcasecmp()</td>
                    <td class="description">Binary safe case-insensitive string comparison</td>
                    <td>
                        <div class="output">"hello" and "Hello" are equal (case-insensitive)</div>
                    </td>
                </tr>
                <tr>
                    <td class="function-name">htmlspecialchars()</td>
                    <td class="description">Converts special characters to HTML entities</td>
                    <td>
                        <div class="output">"&lt;strong&gt;Text&lt;/strong&gt;"</div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
    <div class="code-example">
        <h3 style="color: #ecf0f1; margin-bottom: 10px;">Example PHP Code Structure</h3>
        <pre>
&lt;
<?php
// Changing case example
$string = "HOLY ANGEL UNIVERSITY";
$lowercase = strtolower($string); // "holy angel university"

// Counting characters
$name = "John Michael Dela Cruz";
$charCount = strlen($name); // 22

// Removing whitespace
$text = "  Hello World!  ";
$trimmed = trim($text); // "Hello World!"

// String replacement
$sentence = "Hello World! Welcome to PHP";
$newSentence = str_replace("World", "Universe", $sentence);

// Other functions
$reversed = strrev($string);
$shuffled = str_shuffle($string);
?> &gt;
        </pre>
    </div>
    
    <div class="footer">
        <p>PHP String Functions Showcase | Gray & White Minimalist Theme</p>
        <p>Note: Date and Time functions are excluded as per requirements</p>
    </div>
</body>
</html>