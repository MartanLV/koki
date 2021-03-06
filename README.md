Interval Tree: The idea is to augment a self-balancing Binary Search Tree (BST) like Red Black Tree, AVL Tree, etc
~to maintain set of intervals~ so that all operations can be done in O(Logn) time.
<hr />


[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/MartanLV/koki/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/MartanLV/koki/?branch=master)

Todo:
- [ ] ****Segment tree* stores intervals, and optimized for "which of these intervals contains a given point" queries.
- [x] *Interval tree* stores intervals as well, but optimized for "which of these intervals overlap with a given interval" queries. It can also be used for point queries - similar to segment tree.
- [ ] *Range tree stores points*, and optimized for "which points fall within a given interval" queries.
- [ ] *Binary indexed tree* stores items-count per index, and optimized for "how many items are there between index m and n" queries.

Performance / Space consumption for one dimension:

- [ ] Segment tree - O(n logn) preprocessing time, O(k+logn) query time, O(n logn) space
- [x] Interval tree - O(n logn) preprocessing time, O(k+logn) query time, O(n) space
- [ ] Range tree - O(n logn) preprocessing time, O(k+logn) query time, O(n) space
- [ ] Binary Indexed tree - O(n logn) preprocessing time, O(logn) query time, O(n) space
(k is the number of reported results).

All data structures can be dynamic, in the sense that the usage scenario includes both data changes and queries:

- [ ] Segment tree - interval can be added/deleted in O(logn) time (see here)
- [ ] Interval tree - interval can be added/deleted in O(logn) time
- [ ] Range tree - new points can be added/deleted in O(logn) time (see here)
- [ ] Binary Indexed tree - the items-count per index can be increased in O(logn) time

Higher dimensions (d>1):

- [ ] Segment tree - O(n(logn)^d) preprocessing time, O(k+(logn)^d) query time, O(n(logn)^(d-1)) space
- [ ] Interval tree - O(n logn) preprocessing time, O(k+(logn)^d) query time, O(n logn) space
- [ ] Range tree - O(n(logn)^d) preprocessing time, O(k+(logn)^d) query time, O(n(logn)^(d-1))) space
- [ ] Binary Indexed tree - O(n(logn)^d) preprocessing time, O((logn)^d) query time, O(n(logn)^d) space

Beethooven approves.

![https://habrastorage.org/webt/lf/hw/dn/lfhwdnvjxlt9vrsbrd_ajpitubc.png](https://habrastorage.org/webt/lf/hw/dn/lfhwdnvjxlt9vrsbrd_ajpitubc.png)

--

[![Latest Stable Version](https://poser.pugx.org/martanlv/koki/v/stable)](https://packagist.org/packages/martanlv/koki)
[![Total Downloads](https://poser.pugx.org/martanlv/koki/downloads)](https://packagist.org/packages/martanlv/koki)
[![Latest Unstable Version](https://poser.pugx.org/martanlv/koki/v/unstable)](https://packagist.org/packages/martanlv/koki)
[![License](https://poser.pugx.org/martanlv/koki/license)](https://packagist.org/packages/martanlv/koki)
[![Monthly Downloads](https://poser.pugx.org/martanlv/koki/d/monthly)](https://packagist.org/packages/martanlv/koki)
[![Daily Downloads](https://poser.pugx.org/martanlv/koki/d/daily)](https://packagist.org/packages/martanlv/koki)
[![composer.lock](https://poser.pugx.org/martanlv/koki/composerlock)](https://packagist.org/packages/martanlv/koki)

[![Maintainability](https://api.codeclimate.com/v1/badges/7d29ce466d93096a8a23/maintainability)](https://codeclimate.com/github/MartanLV/koki/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/7d29ce466d93096a8a23/test_coverage)](https://codeclimate.com/github/MartanLV/koki/test_coverage)

__


[![Code Coverage](https://scrutinizer-ci.com/g/MartanLV/koki/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/MartanLV/koki/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/MartanLV/koki/badges/build.png?b=master)](https://scrutinizer-ci.com/g/MartanLV/koki/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/MartanLV/koki/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

[![StyleCI](https://styleci.io/repos/113767283/shield?branch=master)](https://styleci.io/repos/113767283)
