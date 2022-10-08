import argparse
import json
import googlesearch

# create function for searching on Google


def search_google(query, lang=None,  num_results=None):
    # if lang is None, set it to system default
    if lang is None:
        import locale
        lang = locale.getdefaultlocale()[0]

    # if num_results is None, set it to 10
    if num_results is None:
        num_results = 10
    else:
        num_results = int(num_results)
    # search on Google with the query and set arguments for the search from args
    results = googlesearch.search(query, num_results=num_results, lang=lang)
    return results


# read parameters from the command line
parser = argparse.ArgumentParser()
parser.add_argument("query", help="query to search on Google")
parser.add_argument("-l", "--lang", help="language for the search")
parser.add_argument("-n", "--num", help="number of results to show")
parser.add_argument(
    "--json", help="show results in JSON format", action="store_true")

args = parser.parse_args()

if args.num and int(args.num) < 1:
    parser.error("Number of results must be greater than 0")
    

# set automatic arguments for the search same as the command line arguments
results = search_google(args.query, lang=args.lang, num_results=args.num)


# check if the user wants to show the results in JSON format
if args.json:
    # print the results in JSON format
    print(json.dumps(list(results), indent=4))
else:
    # print the answer from google with number listing
    for i, result in enumerate(results):
        print(f"{i+1}. {result}")
