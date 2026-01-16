# ALPHAS_genetics.php Analysis Catalog

**Complete Index of Analyzable Genetic Markers**

This catalog lists all 70 markers and associated medications calculable by `ALPHAS_genetics.php`.

---

## 1. Pharmacogenomics (PGx)

### 1.1 CYP450 Enzyme Family

| Gene | Function | Related Drugs | Markers |
|------|----------|---------------|---------|
| **CYP2D6** | Drug metabolism (25% of prescriptions) | Codeine, Tamoxifen, Amitriptyline, Metoprolol | 12 |
| **CYP2C19** | Drug metabolism | Clopidogrel, Omeprazole, Escitalopram, Voriconazole | 10 |
| **CYP2C9** | Drug metabolism | Warfarin, Phenytoin, NSAIDs | 8 |
| **CYP3A4/5** | Drug metabolism (50% of prescriptions) | Tacrolimus, Cyclosporine, Statins | 7 |
| **CYP1A2** | Caffeine/drug metabolism | Theophylline, Clozapine | 2 |
| **CYP2B6** | Drug metabolism | Efavirenz, Bupropion | 4 |
| **CYP2C8** | Drug metabolism | Paclitaxel, Repaglinide | 3 |
| **CYP2A6** | Nicotine metabolism | Nicotine (smoking cessation) | 4 |
| **CYP4F2** | Vitamin K metabolism | Warfarin | 1 |

### 1.2 Transporters

| Gene | Function | Related Drugs | Markers |
|------|----------|---------------|---------|
| **SLCO1B1** | Hepatic uptake | Simvastatin, Atorvastatin (myopathy risk) | 3 |
| **ABCB1** | P-glycoprotein | Digoxin, Chemotherapy agents | 3 |
| **ABCG2** | Drug efflux | Rosuvastatin, Methotrexate | 1 |

### 1.3 Phase II Metabolic Enzymes

| Gene | Function | Related Drugs | Markers |
|------|----------|---------------|---------|
| **UGT1A1** | Glucuronidation | Irinotecan (Gilbert's syndrome) | 3 |
| **NAT2** | Acetylation | Isoniazid, Sulfasalazine | 5 |
| **TPMT** | Thiopurine metabolism | Azathioprine, 6-Mercaptopurine | 3 |
| **NUDT15** | Thiopurine metabolism | Azathioprine (critical in East Asians) | 3 |
| **DPYD** | Fluoropyrimidine metabolism | 5-FU, Capecitabine (fatal toxicity risk) | 5 |

### 1.4 Other Critical Genes

| Gene | Function | Related Drugs | Markers |
|------|----------|---------------|---------|
| **VKORC1** | Vitamin K cycle | Warfarin | 3 |
| **G6PD** | Oxidative stress defense | Primaquine, Rasburicase, Sulfonamides | 4 |
| **HLA-B/A** | Immune response | Abacavir, Carbamazepine, Allopurinol | 5 |
| **OPRM1** | Opioid receptor | Morphine, Fentanyl | 1 |
| **COMT** | Catecholamine metabolism | Opioid sensitivity | 1 |
| **MTHFR** | Folate metabolism | Methotrexate | 2 |
| **ADRB1/2** | Beta-adrenergic receptors | Beta-blockers, Beta-agonists | 4 |
| **HTR2A** | Serotonin receptor | Antidepressants | 2 |
| **IL28B** | Interferon response | Peginterferon (HCV) | 1 |

---

## 2. Disease Risk Prediction (17 Diseases)

### 2.1 Neurodegenerative

| Disease | Genes | SNPs | Odds Ratio | PMID | Evidence |
|---------|-------|------|------------|------|----------|
| **Alzheimer's Disease** | APOE | rs429358, rs7412 | 3.2-12.0 | 9343467 | A |
| **Parkinson's Disease** | LRRK2, GBA, SNCA | rs34637584, rs76763715, rs356182 | 1.3-9.6 | 18539534, 19846850, 25064009 | A |

### 2.2 Cardiovascular

| Disease | Genes | SNPs | Odds Ratio | PMID | Evidence |
|---------|-------|------|------------|------|----------|
| **Coronary Artery Disease** | 9p21.3, LPA | rs10757278, rs4977574, rs10455872, rs3798220 | 1.25-1.92 | 17478681, 21378990, 20032323 | A |
| **Atrial Fibrillation** | PITX2, KCNN3 | rs2200733, rs10033464, rs13376333 | 1.39-1.72 | 17603472, 20173747 | A |
| **Venous Thromboembolism** | F5, F2 | rs6025, rs1799963 | 2.7-15.0 | 38498041, 8916933 | A |

### 2.3 Metabolic

| Disease | Genes | SNPs | Odds Ratio | PMID | Evidence |
|---------|-------|------|------------|------|----------|
| **Type 2 Diabetes** | TCF7L2, PPARG, KCNJ11, SLC30A8, CDKN2A/2B | rs7903146 + 4 others | 0.86-2.13 | 17476472, 10973253, 12540637, 17293876, 17463246 | A |

### 2.4 Cancer

| Disease | Genes | SNPs | Odds Ratio | PMID | Evidence |
|---------|-------|------|------------|------|----------|
| **Breast Cancer** | FGFR2, TOX3, 2q35, CASP8 | rs2981582, rs3803662, rs13387042, rs1045485 | 0.88-1.31 | 17529967, 17529974, 17293864 | A |
| **Colorectal Cancer** | 8q24, SMAD7, GREM1 | rs6983267, rs4939827, rs4779584 | 1.20-1.26 | 17618284, 17618283, 18372905 | A |
| **Prostate Cancer** | 8q24, MSMB, KLK3 | rs1447295, rs16901979, rs10993994, rs17632542 | 1.20-1.79 | 16862119, 17401363, 18264098, 21743467 | A |

### 2.5 Ophthalmological

| Disease | Genes | SNPs | Odds Ratio | PMID | Evidence |
|---------|-------|------|------------|------|----------|
| **Age-related Macular Degeneration** | CFH, ARMS2, C3 | rs1061170, rs10490924, rs2230199 | 1.45-8.21 | 15761122, 16174643, 17634449 | A |
| **Glaucoma** | TMCO1, SIX1/SIX6, LOXL1 | rs4656461, rs10483727, rs2165241 | 1.32-2.46 | 21532571, 20835242, 17690259 | B |

### 2.6 Autoimmune

| Disease | Genes | SNPs | Odds Ratio | PMID | Evidence |
|---------|-------|------|------------|------|----------|
| **Rheumatoid Arthritis** | HLA-DRB1, PTPN22, TRAF1-C5 | rs6910071, rs2476601, rs3761847 | 1.32-2.88 | 22286218, 15208781, 17804836 | A |
| **Celiac Disease** | HLA-DQ2.5, HLA-DQ8 | rs2187668, rs7454108 | 2.81-7.04 | 17558408 | A |

### 2.7 Psychiatric

| Disease | Genes | SNPs | Odds Ratio | PMID | Evidence |
|---------|-------|------|------------|------|----------|
| **Bipolar Disorder** | CACNA1C, ANK3 | rs4027132, rs1006737, rs10994336 | 1.15-1.45 | 18711365, 19786961 | B |
| **Schizophrenia** | MIR137, TRIM26, CSMD1 | rs1625579, rs2021722, rs4129585 | 1.11-1.22 | 21926974, 25056061 | B |

---

## 3. Trait Analysis (14 Traits)

### 3.1 Metabolism & Nutrition

| Trait | Gene | SNP | PMID | Phenotypes |
|-------|------|-----|------|------------|
| **Caffeine Metabolism** | CYP1A2 | rs762551 | 16522833 | Fast / Intermediate / Slow |
| **Alcohol Flush Reaction** | ALDH2 | rs671 | 25848305 | Normal / Flusher |
| **Alcohol Dependence Risk** | ADH1B | rs1229984 | 22014159 | Protected / Standard |
| **Lactose Intolerance** | MCM6/LCT | rs4988235 | 11788828 | Tolerant / Intolerant |
| **Bitter Taste Perception** | TAS2R38 | rs713598, rs1726866 | 12595690 | Taster / Non-taster |
| **Vitamin D Metabolism** | GC, DHCR7, CYP2R1 | rs2282679, rs12785878, rs10741657 | 20541252 | High Risk / Low Risk |
| **Folate Metabolism** | MTHFR | rs1801133, rs1801131 | 7647779, 9758618 | Normal / Reduced |

### 3.2 Fitness & Exercise

| Trait | Gene | SNP | PMID | Phenotypes |
|-------|------|-----|------|------------|
| **Muscle Fiber Type** | ACTN3 | rs1815739 | 12879365 | Power / Endurance |
| **Aerobic Capacity** | PPARGC1A | rs8192678 | 15726412 | High / Standard |
| **Injury Risk (Tendon/Ligament)** | COL5A1, COL1A1 | rs12722, rs1800012 | 16505074, 18445820 | Elevated / Standard |

### 3.3 Sleep & Circadian Rhythm

| Trait | Gene | SNP | PMID | Phenotypes |
|-------|------|-----|------|------------|
| **Chronotype** | CLOCK, PER2 | rs1801260, rs57875989 | 9779520, 11232563 | Morning / Evening |
| **Sleep Duration Need** | DEC2, PAX8 | rs121912617, rs1823125 | 19679812, 25600114 | Short / Standard |

### 3.4 Physical Characteristics

| Trait | Gene | SNP | PMID | Phenotypes |
|-------|------|-----|------|------------|
| **Male Pattern Baldness** | 20p11, AR | rs2180439, rs6152 | 18849991, 18350319 | High Risk / Low Risk |
| **Freckling Tendency** | MC1R | rs1805007 | 11359134 | Yes / No |

---

## 4. Statistical Summary

```
┌─────────────────────────────────────────────────────────────────┐
│                    ALPHAS ANALYSIS SUMMARY                       │
├─────────────────────────────────────────────────────────────────┤
│                                                                  │
│  Category              Items        SNPs         PMIDs           │
│  ─────────────────────────────────────────────────────────────  │
│  Pharmacogenomics      25 genes     ~180         CPIC/PharmGKB  │
│  Disease Risk          17 diseases  ~50          47             │
│  Trait Analysis        14 traits    ~20          23             │
│                                                                  │
│  ─────────────────────────────────────────────────────────────  │
│  TOTAL                 —            ~250         70 unique      │
│                                                                  │
└─────────────────────────────────────────────────────────────────┘
```

---

## 5. Evidence Levels

| Level | Definition | Example |
|-------|------------|---------|
| **A** | Multiple large GWAS with independent replication | APOE-Alzheimer's, TCF7L2-Diabetes |
| **B** | Large GWAS detected, additional validation exists | CACNA1C-Bipolar |

---

## 6. Important Notes

### Limitations
- **BRCA1/BRCA2**: Consumer tests detect only 3 variants (clinical testing recommended)
- **CYP2D6 CNV**: Gene copy number variations not detectable
- **Population Bias**: Most GWAS conducted in European populations

### Interpretation Guidelines
- Odds ratios represent **relative risk**, not absolute risk
- Genetic risk is modified by environmental factors
- Negative results do not mean zero risk

---

<div align="center">

**ALPHAS SYSTEM**

*Amplify LLM PHP Harmonized Acyclic Statelessness*

All markers backed by PMID literature citations

</div>
