# Wait! Before you go any further...

This project is abandoned. This project was originally created for an undergraduate-level course at Western Washington University in 2017. 

I'm leaving it up for posterity, but after looking at it two years later, the following are things I don't like or would have done differently: 
* There's a lot of code duplication that would be relatively trivial to fix. Especially among the `viz_*` files. 
* Dynamically generated SQL statements instead of prepared statements. 
   * Yikes.
* Code formatting is overall bizarre. 
* There is minimal-to-no seperation of HTML, CSS, JS, SQL, and PHP.
* The Tableau vizzes and database running the site are essentially duplicated. 
  * It's the same data, but the site runs off a MySQL DB, Tableau vizzes run off flat files associated with the visualizations themselves. 

## Synopsis
Tool to display Tableau Visualizations on Seattle Open Data based on user input on neighborhoods.
 
End goal is to be able to select a desirable neighborhood in the city based on their own values and interests - traffic, bars, etc.

## Motivation

To create an accessible tool that helps users analyze Seattle’s neighborhoods on various metrics. 

## Installation

* Install [Vagrant](https://www.vagrantup.com/)
 * If using something other than VirtualBox for virtualization, make sure you modify the Vagrantfile in the root of the repository to reflect that change. 
* `vagrant up` 

## Configuration

Create config.ini with database credentials
* See `includes/connection.php` for reference

## Notes
This is not intended to be production-level software, nor was it created as such. It was created for my own educational purposes. 

## License

Copyright (c) 2017 

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
