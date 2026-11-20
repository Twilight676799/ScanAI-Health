# ScanAI-Health: Chest X-Ray Lung Disease Classification Prototype

> **Disclaimer:** Developed for academic and PKM-KC proposal/prototype purposes. Not intended for clinical diagnosis or medical decision-making.

## Overview
Web-based prototype concept for classifying chest X-ray images into **Normal** and **Abnormal** categories using Convolutional Neural Networks (CNN) as an initial screening aid, aligned with SDG 3 (Good Health and Well-Being).

## Proposed Pipeline & Architecture
- **Datasets:** Public chest X-ray datasets (Kaggle Chest X-Ray Pneumonia Dataset and NIH ChestX-ray14), split `80:10:10` into train, validation, and test sets.
- **Preprocessing:** Image resizing, normalization, and augmentation (rotation, flipping, zooming).
- **Model:** CNN with **ResNet50** transfer learning (TensorFlow/Keras), evaluated using Accuracy, Precision, Recall, and F1-Score.
- **Prototype Flow:** Doctor-restricted access $\rightarrow$ patient metadata & chest X-ray upload $\rightarrow$ CNN classification output & report download.

## Repository Files
- `index.html`, `upload_data.html` — Prototype frontend pages.
- `style/`, `image/` — Stylesheets and image assets.
- `save.php`, `uploads/` — Upload handling script and target directory.

*Note: Static frontend assets deploy directly on Vercel, whereas `save.php` requires a PHP-capable runtime rather than standard static hosting.*

## References
- Rajpurkar, P., et al. (2017). *CheXNet: Radiologist-Level Pneumonia Detection on Chest X-Rays with Deep Learning*. arXiv:1711.05225.
- Wang, X., et al. (2017). *ChestX-ray8: Hospital-scale Chest X-ray Database and Benchmarks...* IEEE CVPR.
- Irvin, J., et al. (2019). *CheXpert: A Large Chest Radiograph Dataset with Uncertainty Labels and Expert Comparison*. AAAI.
```[cite: 2, 3]

Want a short 2–3 line blurb next for your main portfolio card to link to this repo?
