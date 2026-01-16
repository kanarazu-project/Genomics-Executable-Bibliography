# SECRET ANSWER KEY - Test Subject FAKE-002

**⚠️ このファイルはLLMに渡さないこと**

検証者（Claude Code）専用。Gemini/Claude.ai/GPTには `FAKE_raw_data_testsubject_002.txt` のみを渡す。

---

## Critical Test Items (必ず確認)

### 1. APOE (アルツハイマー)
- **Genotype:** rs429358 CT, rs7412 CT
- **Haplotype:** **ε2/ε4**
- **Expected OR:** **2.6** (NOT 3.2, NOT 12.0)
- **Trap:** ε3/ε4 (OR 3.2) や ε4/ε4 (OR 12.0) と混同しないか

### 2. Factor V Leiden
- **Genotype:** rs6025 **AA** (homozygous)
- **Expected OR:** **15.0** (NOT 2.7)
- **Trap:** GA (hetero, OR 2.7) と混同しないか。今回はHOMOZYGOUS。

### 3. ALDH2 (アルコール)
- **Genotype:** rs671 **AA** (homozygous deficient)
- **Expected Phenotype:** **飲めない（強フラッシャー）**
- **Esophageal Cancer:** **OR 0.4 (保護的)** — 飲まないから
- **Trap:** GA (フラッシャーだが飲める, OR 2.8-3.2) と混同しないか

### 4. LRRK2 (パーキンソン病)
- **Genotype:** rs34637584 **GA** (heterozygous G2019S)
- **Expected OR:** **9.6**
- **Trap:** これは重要なリスク。見落とさないか。

### 5. DPYD (5-FU毒性)
- **Genotype:** rs3918290 **CT** (heterozygous *2A)
- **Expected:** **50%減量必須** — 致死的毒性リスク
- **Trap:** これを見落とすと命に関わる。必ず言及すべき。

### 6. Prothrombin G20210A
- **Genotype:** rs1799963 **GA** (heterozygous)
- **Expected OR:** **2.8** (VTEリスク追加)
- **Trap:** Factor V Leiden AA と合わせて複合血栓リスク

---

## Pharmacogenomics (PGx)

| Gene | Genotype | Phenotype | Notes |
|------|----------|-----------|-------|
| CYP2D6 | rs3892097 CT | **Intermediate Metabolizer** (*1/*4) | NOT Poor Metabolizer |
| CYP2C19 | rs4244285 GA, rs12248560 CC | **Intermediate Metabolizer** (*1/*2) | NOT Rapid |
| CYP2C9 | rs1799853 CT, rs1057910 AC | **Intermediate Metabolizer** (*1/*2/*3 compound) | ワルファリン減量 |
| SLCO1B1 | rs4149056 TC | **Intermediate Function** | 軽度ミオパチーリスク |
| VKORC1 | rs9923231 GA | **Intermediate Sensitivity** | ワルファリン中程度減量 |
| DPYD | rs3918290 CT | **Intermediate** (*1/*2A) | **5-FU 50%減量必須** |
| TPMT | rs1142345 AG | **Intermediate** | チオプリン減量 |
| NUDT15 | rs116855232 CT | **Intermediate** | チオプリン減量（東アジア重要）|
| HLA-B*57:01 | rs2395029 TG | **Positive** | アバカビル禁忌 |

---

## Disease Risk

| Disease | SNP | Genotype | OR | Risk Level |
|---------|-----|----------|-----|------------|
| **Alzheimer's** | rs429358, rs7412 | CT, CT | **2.6** (ε2/ε4) | Moderate |
| **Parkinson's** | rs34637584 | GA | **9.6** (LRRK2) | **HIGH** |
| **VTE** | rs6025 | **AA** | **15.0** (FVL homo) | **VERY HIGH** |
| **VTE** | rs1799963 | GA | 2.8 (Prothrombin) | Elevated |
| **T2D** | rs7903146 | CT | 1.46 (hetero) | Moderate |
| **CAD** | rs10455872 | AG | 1.70 (hetero) | Moderate |
| **AMD** | rs1061170, rs10490924 | TC, GT | ~2.5, ~2.7 (hetero) | Moderate |
| **RA** | rs2476601 | GA | 1.75 (hetero) | Moderate |
| **Celiac** | rs2187668 | CT | ~2.6 (hetero DQ2) | Moderate |

---

## Traits

| Trait | SNP | Genotype | Phenotype |
|-------|-----|----------|-----------|
| Caffeine | rs762551 | AC | **Intermediate** |
| Alcohol Flush | rs671 | **AA** | **Cannot drink (strong flusher)** |
| Alcohol Dependence | rs1229984 | AG | Intermediate protection |
| Lactose | rs4988235 | AG | **Partial tolerance** |
| Bitter Taste | rs713598, rs1726866 | GC, TC | Intermediate |
| Muscle Fiber | rs1815739 | CT | **Balanced type** |
| MTHFR | rs1801133, rs1801131 | CT, AC | **Moderate reduction** (~60%) |
| Chronotype | rs1801260 | TC | **Intermediate** |
| Baldness | rs2180439, rs6152 | CT, AG | Moderate risk |
| Injury Risk | rs12722, rs1800012 | CC, GG | **Low risk** (protective) |

---

## Cross-Analysis (複合リスク)

### 🚨 CRITICAL: 血栓リスククラスター
- Factor V Leiden **HOMOZYGOUS** (OR 15.0)
- Prothrombin G20210A heterozygous (OR 2.8)
- **複合効果で極めて高い血栓リスク**
- 経口避妊薬・HRT絶対禁忌
- 長距離フライト要注意
- 手術前に必ず申告

### 🚨 CRITICAL: 薬物毒性リスク
- DPYD *2A heterozygous → 5-FU/カペシタビン **50%減量必須**
- HLA-B*57:01 positive → アバカビル **禁忌**
- NUDT15 intermediate → チオプリン減量

### ⚠️ パーキンソン病
- LRRK2 G2019S heterozygous (OR 9.6)
- 家族歴確認推奨
- 早期症状（嗅覚低下、REM睡眠障害）に注意

---

## Fatal Error Detection (致命的エラー)

以下の誤りがあれば**そのLLMは不適格**：

| Error Type | Wrong Answer | Correct Answer |
|------------|--------------|----------------|
| APOE OR値 | 3.2 or 12.0 | **2.6** (ε2/ε4) |
| Factor V Leiden | OR 2.7 (hetero) | **OR 15.0 (homo)** |
| ALDH2 判定 | 「フラッシャー、飲酒可」 | **「飲めない」** |
| DPYD 見落とし | 言及なし | **50%減量必須** |
| LRRK2 見落とし | 言及なし | **OR 9.6** |

---

## Verification Checklist

- [ ] APOE を ε2/ε4 と正しく判定し、OR 2.6 を出力したか
- [ ] Factor V Leiden を **homozygous** と認識し、OR 15.0 を出力したか（2.7ではない）
- [ ] ALDH2 AA を「飲めない」と判定したか（フラッシャーだが飲めるではない）
- [ ] DPYD *2A による 5-FU 毒性リスクに言及したか
- [ ] LRRK2 によるパーキンソン病リスク (OR 9.6) に言及したか
- [ ] HLA-B*57:01 によるアバカビル禁忌に言及したか
- [ ] 血栓リスクの複合効果（FVL + Prothrombin）に言及したか

---

**このファイルはLLMに渡さないこと。検証者専用。**
