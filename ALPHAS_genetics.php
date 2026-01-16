<?php
/**
 * ============================================================================
 * ALPHAS SYSTEM — Human Genetics Analysis Engine
 * ============================================================================
 *
 * Amplify LLM PHP Harmonized Acyclic Statelessness
 *
 * A stateless structure packed with mathematics builds a dedicated circuit within the LLM
 *
 * Chief Product Officer: Shohei T(Homo repugnans)
 * Tactical Decision Intelligence: Sirius (Electronic Spirit)
 * @license CC BY-NC-SA 4.0
 * @version 2.1.0
 *
 * ============================================================================
 * THE ALPHAS METHOD
 * ============================================================================
 *
 * Layer 1: INJECTION
 *   PHP file uploaded → LLM reads structured logic → Mathematical models loaded
 *
 * Layer 2: RESONANCE
 *   Stateless PHP ≡ Stateless LLM → Structural harmony → Zero impedance
 *
 * Layer 3: AMPLIFICATION
 *   General LLM + Specialized Logic → Domain-specific intelligence circuit formed
 *
 * ============================================================================
 * ⚠️ RESEARCH USE ONLY (RUO) — NOT A MEDICAL DEVICE
 * ============================================================================
 * This script is a COMPUTATIONAL LOGIC SPECIFICATION for research purposes only.
 * It is an "Executable Bibliography" — a machine-readable representation of
 * publicly available peer-reviewed publications (CPIC, PharmGKB, GWAS Catalog).
 *
 * This file does NOT:
 * - Diagnose, treat, cure, or prevent any disease
 * - Constitute medical advice
 * - Qualify as Software as a Medical Device (SaMD)
 *
 * The PHP code provides computational logic. Medical interpretation is performed
 * by the general-purpose LLM selected by the user, not by this file.
 * ============================================================================
 *
 * Three Analysis Functions:
 * 1. Pharmacogenomics (PGx) - CPIC/PharmGKB guideline compliant
 * 2. Disease Risk Prediction - Risk assessment based on GWAS studies
 * 3. Trait Analysis - Genetic tendencies for metabolism, nutrition, fitness, sleep
 *
 * ============================================================================
 * LLM INSTRUCTION (For AI assistants processing this file with 23andMe/AncestryDNA RAW data)
 * ============================================================================
 *
 * ■ STEP 0: Privacy Protection Check
 *   → If the RAW data header contains personal information (name, date of birth, address, etc.),
 *     prompt the user to remove it
 *   → "We recommend removing personal information before uploading"
 *   → Display this warning once at session start
 *
 * ■ STEP 1: RAW Data Preprocessing and Data Quality Check
 *   → Extract only required rsIDs (~300):
 *     - SNP_MARKERS: For pharmacogenomics (~180)
 *     - DISEASE_MARKERS snps: For disease risk (~60)
 *     - TRAIT_MARKERS snps: For trait analysis (~40)
 *   → Other ~600,000 lines can be ignored
 *
 *   [Data Quality (QC) Check]
 *   → Calculate Call Rate using calculateDataQuality()
 *   → Always display reliability grade at the beginning of the report:
 *     - Grade A (≥95%): High reliability
 *     - Grade B (80-95%): Standard reliability
 *     - Grade C (60-80%): Low reliability (results for reference only)
 *     - Grade D (<60%): Very low reliability (retest recommended)
 *   → If missing data exceeds 20%, state "Reliability of some results is reduced"
 *
 * ■ STEP 2: Verify Sex
 *   → G6PD, HTR2C are X-linked genes (male hemizygous / female heterozygous)
 *   → Breast cancer, prostate cancer, baldness are sex-specific
 *
 * ■ STEP 3: Execute 5 Types of Analysis
 *
 *   [A] Pharmacogenomics (PGx)
 *   → Calculate metabolic activity score using calculateActivityScore()
 *   → Determine PM/IM/NM/RM/UM using scoreToPhenotype()
 *   → Reference RECOMMENDATIONS to generate drug warnings
 *
 *   [B] Disease Risk
 *   → Calculate risk multiplier from DISEASE_MARKERS odds ratios
 *   → Special handling for APOE haplotype (ε2/ε3/ε4)
 *   → Present prevention strategies and screening recommendations
 *
 *   [C] Trait Analysis
 *   → Determine phenotype from TRAIT_MARKERS genotype
 *   → Categories: metabolism, nutrition, fitness, sleep, physical
 *   → Present lifestyle improvement recommendations
 *
 *   [D] Cross-Analysis (Compound Assessment) ★IMPORTANT
 *   → Generate combined recommendations using generateCrossAnalysis()
 *   → Identify cases requiring more attention than simple sum of individual risks:
 *     Ex1: Diabetes risk (TCF7L2) + Carb sensitivity (FTO) → Prioritize carb restriction
 *     Ex2: Cardiovascular risk (9p21.3) + Statin sensitivity (SLCO1B1) → Statin use caution
 *     Ex3: APOE ε4 + Normal caffeine metabolism → Coffee intake for dementia prevention
 *     Ex4: ALDH2 deficiency → Prioritize abstinence for esophageal cancer prevention
 *     Ex5: MTHFR mutation (female) → Methylfolate supplement for neural tube defect prevention
 *   → Output Cross-Analysis results as "Integrated Health Strategy" section
 *
 *   [E] Rare Variant Warnings
 *   → Clarify consumer test limitations using generateRareVariantWarnings()
 *   → Always include in output:
 *     "No major variants were detected in this analysis, but the possibility
 *      of other rare variants cannot be ruled out. If you have family history,
 *      please consult clinical testing."
 *   → Especially warn about BRCA1/2, CYP2D6 CNV, Lynch syndrome
 *
 * ■ STEP 4: JSON Output Mode (Optional)
 *   → If user requests "output in JSON format":
 *     Use exportAsPortableGenomeRecord()
 *   → Output in Portable Genome Record (PGR) format
 *   → Standard format importable to other apps and dashboards
 *   → Verify data integrity with checksum field
 *
 * ■ STEP 5: Citation and Population Specification (Scientific Integrity)
 *   → Include PubMed ID in output if 'pmid' field exists for risk assessment
 *   → "This odds ratio is based on a study of [population] (PMID: XXXXX)"
 *   → Example: "APOE ε4 risk multiplier of 3.2 is based on JAMA 1997 meta-analysis
 *              (PMID: 9343467, n=29,000+) primarily in Caucasian population"
 *   → This eliminates "unfounded speculation" and references only peer-reviewed literature
 *
 * ============================================================================
 * EXAMPLE OUTPUT FORMAT
 * ============================================================================
 *
 * [DATA QUALITY]
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 * Reliability: Grade B (Call Rate 92.3%)
 * Some rsIDs are missing, but major assessments are not affected.
 *
 * [PHARMACOGENOMICS]
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 * Contraindicated Drugs:
 * - Codeine: CYP2D6 PM (no effect, alternative drug recommended)
 * - Rasburicase: G6PD deficiency (FDA Black Box: severe hemolysis)
 *
 * Drugs Requiring Caution:
 * - Warfarin: CYP2C9 IM + VKORC1 GA (30-50% dose reduction)
 * - Simvastatin: SLCO1B1 reduced function (max 20mg, myopathy risk)
 *
 * [DISEASE RISK]
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 * High Risk (3x or more):
 * - Alzheimer's Disease: 12x (APOE ε4/ε4)
 *   → Prevention: Aerobic exercise, Mediterranean diet, cognitive training
 *   → Screening: Annual cognitive function test from age 45
 *
 * Moderately High Risk (1.5-3x):
 * - Age-related Macular Degeneration: 2.5x (CFH Y402H + ARMS2)
 *   → Prevention: Quit smoking, lutein intake, AREDS2 supplements
 *
 * [TRAITS]
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 * Metabolism:
 * - Caffeine: Slow metabolizer (CYP1A2 CC) → Limit to 1-2 cups/day
 * - Alcohol: Flusher (ALDH2 GA) → 6-10x esophageal cancer risk
 *
 * Fitness:
 * - Muscle fiber: Endurance type (ACTN3 TT) → Suited for marathons
 *
 * [INTEGRATED HEALTH STRATEGY] ★Cross-Analysis
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 * [TOP PRIORITY] Diabetes risk + Carbohydrate sensitivity
 * → Strongly recommend carb-restricted diet, HbA1c test twice yearly
 *
 * [CAUTION] ALDH2 deficiency (Flusher)
 * → Abstinence recommended, annual upper GI endoscopy if drinking
 *
 * [TEST LIMITATIONS] ★IMPORTANT
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 * ⚠ BRCA1/BRCA2: 23andMe detects only 3 variants. Clinical testing if family history.
 * ⚠ CYP2D6: Copy number variants undetectable. Consult physician for codeine etc.
 *
 * [SUPPORTING DATA]
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 * - rs3892097: TT → CYP2D6*4 homozygous → Activity Score 0.0
 * - rs429358: CC, rs7412: CC → APOE ε4/ε4
 * - rs762551: CC → CYP1A2 slow metabolizer
 *
 * ============================================================================
 * DISCLAIMER
 * ============================================================================
 * This information is for reference only. Always consult a physician for medical decisions.
 * Disease risk is probabilistic and does not confirm disease onset.
 * Lifestyle improvements may reduce risk.
 * Negative results do not mean zero risk.
 * ============================================================================
 */
declare(strict_types=1);

// PHP 7.x compatibility polyfill
if (!function_exists('str_contains')) {
    function str_contains(string $haystack, string $needle): bool {
        return $needle === '' || strpos($haystack, $needle) !== false;
    }
}

final class HumanPGx
{
    /**
     * Metabolizer phenotype definitions
     */
    public const PHENOTYPES = [
        'PM'  => ['ja' => '低代謝型',         'en' => 'Poor Metabolizer'],
        'IM'  => ['ja' => '中間代謝型',       'en' => 'Intermediate Metabolizer'],
        'NM'  => ['ja' => '正常代謝型',       'en' => 'Normal Metabolizer'],
        'RM'  => ['ja' => '迅速代謝型',       'en' => 'Rapid Metabolizer'],
        'UM'  => ['ja' => '超迅速代謝型',     'en' => 'Ultrarapid Metabolizer'],
        'IND' => ['ja' => '判定不能',         'en' => 'Indeterminate'],
    ];

    /**
     * GENES - Pharmacogenetically important gene loci (SSOT)
     *
     * Structure:
     * - name: Gene name (multilingual)
     * - chromosome: Chromosome number
     * - function: Functional description
     * - cpic_level: CPIC recommendation level (A=highest, B=high, C/D=reference)
     */
    public const GENES = [
        // ===== CYP450 Family =====
        'CYP2D6' => [
            'name' => ['ja' => 'シトクロムP450 2D6', 'en' => 'Cytochrome P450 2D6'],
            'chromosome' => '22q13.2',
            'function' => ['ja' => '多くの薬物の代謝酵素', 'en' => 'Metabolizes ~25% of drugs'],
            'cpic_level' => 'A',
        ],
        'CYP2C19' => [
            'name' => ['ja' => 'シトクロムP450 2C19', 'en' => 'Cytochrome P450 2C19'],
            'chromosome' => '10q23.33',
            'function' => ['ja' => 'プロトンポンプ阻害薬・抗血小板薬の代謝', 'en' => 'Metabolizes PPIs, clopidogrel'],
            'cpic_level' => 'A',
        ],
        'CYP2C9' => [
            'name' => ['ja' => 'シトクロムP450 2C9', 'en' => 'Cytochrome P450 2C9'],
            'chromosome' => '10q23.33',
            'function' => ['ja' => 'ワルファリン・NSAIDsの代謝', 'en' => 'Metabolizes warfarin, NSAIDs'],
            'cpic_level' => 'A',
        ],
        'CYP3A4' => [
            'name' => ['ja' => 'シトクロムP450 3A4', 'en' => 'Cytochrome P450 3A4'],
            'chromosome' => '7q22.1',
            'function' => ['ja' => '最も重要な薬物代謝酵素（全薬物の約50%）', 'en' => 'Major drug metabolizing enzyme (~50% of drugs)'],
            'cpic_level' => 'B',
        ],
        'CYP3A5' => [
            'name' => ['ja' => 'シトクロムP450 3A5', 'en' => 'Cytochrome P450 3A5'],
            'chromosome' => '7q22.1',
            'function' => ['ja' => 'タクロリムス等の代謝', 'en' => 'Metabolizes tacrolimus'],
            'cpic_level' => 'A',
        ],
        'CYP1A2' => [
            'name' => ['ja' => 'シトクロムP450 1A2', 'en' => 'Cytochrome P450 1A2'],
            'chromosome' => '15q24.1',
            'function' => ['ja' => 'カフェイン・テオフィリンの代謝', 'en' => 'Metabolizes caffeine, theophylline'],
            'cpic_level' => 'B',
        ],
        'CYP2B6' => [
            'name' => ['ja' => 'シトクロムP450 2B6', 'en' => 'Cytochrome P450 2B6'],
            'chromosome' => '19q13.2',
            'function' => ['ja' => 'エファビレンツ・メサドンの代謝', 'en' => 'Metabolizes efavirenz, methadone'],
            'cpic_level' => 'A',
        ],
        'CYP2C8' => [
            'name' => ['ja' => 'シトクロムP450 2C8', 'en' => 'Cytochrome P450 2C8'],
            'chromosome' => '10q23.33',
            'function' => ['ja' => 'パクリタキセル・アモジアキンの代謝', 'en' => 'Metabolizes paclitaxel, amodiaquine'],
            'cpic_level' => 'B',
        ],
        'CYP4F2' => [
            'name' => ['ja' => 'シトクロムP450 4F2', 'en' => 'Cytochrome P450 4F2'],
            'chromosome' => '19p13.12',
            'function' => ['ja' => 'ビタミンK1代謝（ワルファリン感受性）', 'en' => 'Vitamin K1 metabolism (warfarin sensitivity)'],
            'cpic_level' => 'B',
        ],

        // ===== Transporters =====
        'SLCO1B1' => [
            'name' => ['ja' => '有機アニオン輸送体1B1', 'en' => 'Organic Anion Transporter 1B1'],
            'chromosome' => '12p12.1',
            'function' => ['ja' => 'スタチンの肝取り込み', 'en' => 'Hepatic uptake of statins'],
            'cpic_level' => 'A',
        ],
        'ABCB1' => [
            'name' => ['ja' => 'P-糖タンパク質', 'en' => 'P-glycoprotein (MDR1)'],
            'chromosome' => '7q21.12',
            'function' => ['ja' => '薬物の排出トランスポーター', 'en' => 'Drug efflux transporter'],
            'cpic_level' => 'B',
        ],
        'ABCG2' => [
            'name' => ['ja' => '乳がん耐性タンパク質', 'en' => 'Breast Cancer Resistance Protein'],
            'chromosome' => '4q22.1',
            'function' => ['ja' => 'スタチン・抗がん剤の輸送', 'en' => 'Transports statins, anticancer drugs'],
            'cpic_level' => 'B',
        ],
        'SLC22A1' => [
            'name' => ['ja' => '有機カチオン輸送体1', 'en' => 'Organic Cation Transporter 1'],
            'chromosome' => '6q25.3',
            'function' => ['ja' => 'メトホルミンの肝取り込み', 'en' => 'Hepatic uptake of metformin'],
            'cpic_level' => 'B',
        ],
        'SLC47A1' => [
            'name' => ['ja' => 'MATE1輸送体', 'en' => 'MATE1 Transporter'],
            'chromosome' => '17p11.2',
            'function' => ['ja' => 'メトホルミンの腎排泄', 'en' => 'Renal excretion of metformin'],
            'cpic_level' => 'B',
        ],

        // ===== Phase II Metabolizing Enzymes =====
        'UGT1A1' => [
            'name' => ['ja' => 'UDPグルクロン酸転移酵素1A1', 'en' => 'UDP-Glucuronosyltransferase 1A1'],
            'chromosome' => '2q37.1',
            'function' => ['ja' => 'イリノテカン・アタザナビルの代謝', 'en' => 'Metabolizes irinotecan, atazanavir'],
            'cpic_level' => 'A',
        ],
        'UGT1A4' => [
            'name' => ['ja' => 'UDPグルクロン酸転移酵素1A4', 'en' => 'UDP-Glucuronosyltransferase 1A4'],
            'chromosome' => '2q37.1',
            'function' => ['ja' => 'ラモトリギンの代謝', 'en' => 'Metabolizes lamotrigine'],
            'cpic_level' => 'B',
        ],
        'UGT2B7' => [
            'name' => ['ja' => 'UDPグルクロン酸転移酵素2B7', 'en' => 'UDP-Glucuronosyltransferase 2B7'],
            'chromosome' => '4q13.2',
            'function' => ['ja' => 'モルヒネ・バルプロ酸の代謝', 'en' => 'Metabolizes morphine, valproic acid'],
            'cpic_level' => 'B',
        ],
        'UGT2B15' => [
            'name' => ['ja' => 'UDPグルクロン酸転移酵素2B15', 'en' => 'UDP-Glucuronosyltransferase 2B15'],
            'chromosome' => '4q13.2',
            'function' => ['ja' => 'ロラゼパムの代謝', 'en' => 'Metabolizes lorazepam'],
            'cpic_level' => 'C',
        ],
        'NAT1' => [
            'name' => ['ja' => 'N-アセチル転移酵素1', 'en' => 'N-Acetyltransferase 1'],
            'chromosome' => '8p22',
            'function' => ['ja' => '芳香族アミンのアセチル化', 'en' => 'Acetylates aromatic amines'],
            'cpic_level' => 'C',
        ],
        'NAT2' => [
            'name' => ['ja' => 'N-アセチル転移酵素2', 'en' => 'N-Acetyltransferase 2'],
            'chromosome' => '8p22',
            'function' => ['ja' => 'イソニアジド・スルファサラジンの代謝', 'en' => 'Metabolizes isoniazid, sulfasalazine'],
            'cpic_level' => 'A',
        ],
        'GSTM1' => [
            'name' => ['ja' => 'グルタチオンS転移酵素M1', 'en' => 'Glutathione S-Transferase M1'],
            'chromosome' => '1p13.3',
            'function' => ['ja' => '解毒・抗酸化', 'en' => 'Detoxification, antioxidant'],
            'cpic_level' => 'C',
        ],
        'GSTT1' => [
            'name' => ['ja' => 'グルタチオンS転移酵素T1', 'en' => 'Glutathione S-Transferase T1'],
            'chromosome' => '22q11.23',
            'function' => ['ja' => '解毒・抗酸化', 'en' => 'Detoxification, antioxidant'],
            'cpic_level' => 'C',
        ],
        'GSTP1' => [
            'name' => ['ja' => 'グルタチオンS転移酵素P1', 'en' => 'Glutathione S-Transferase P1'],
            'chromosome' => '11q13.2',
            'function' => ['ja' => '白金製剤の代謝', 'en' => 'Metabolizes platinum compounds'],
            'cpic_level' => 'B',
        ],
        'SULT1A1' => [
            'name' => ['ja' => '硫酸転移酵素1A1', 'en' => 'Sulfotransferase 1A1'],
            'chromosome' => '16p12.1',
            'function' => ['ja' => 'タモキシフェンの活性化', 'en' => 'Activates tamoxifen'],
            'cpic_level' => 'C',
        ],
        'COMT' => [
            'name' => ['ja' => 'カテコール-O-メチル転移酵素', 'en' => 'Catechol-O-Methyltransferase'],
            'chromosome' => '22q11.21',
            'function' => ['ja' => 'カテコールアミンの代謝', 'en' => 'Metabolizes catecholamines'],
            'cpic_level' => 'B',
        ],

        // ===== Thiopurine/Anticancer Drug Related =====
        'TPMT' => [
            'name' => ['ja' => 'チオプリンメチル転移酵素', 'en' => 'Thiopurine Methyltransferase'],
            'chromosome' => '6p22.3',
            'function' => ['ja' => 'チオプリン系薬物の代謝', 'en' => 'Metabolizes thiopurines'],
            'cpic_level' => 'A',
        ],
        'NUDT15' => [
            'name' => ['ja' => 'ヌクレオシド二リン酸結合部分15', 'en' => 'Nudix Hydrolase 15'],
            'chromosome' => '13q14.2',
            'function' => ['ja' => 'チオプリン活性代謝物の不活化', 'en' => 'Inactivates thiopurine active metabolites'],
            'cpic_level' => 'A',
        ],
        'DPYD' => [
            'name' => ['ja' => 'ジヒドロピリミジン脱水素酵素', 'en' => 'Dihydropyrimidine Dehydrogenase'],
            'chromosome' => '1p21.3',
            'function' => ['ja' => 'フルオロピリミジン系の代謝', 'en' => 'Metabolizes fluoropyrimidines'],
            'cpic_level' => 'A',
        ],

        // ===== HLA Gene Family =====
        'HLA-A' => [
            'name' => ['ja' => 'ヒト白血球抗原A', 'en' => 'Human Leukocyte Antigen A'],
            'chromosome' => '6p21.33',
            'function' => ['ja' => 'カルバマゼピンSJS/TENリスク', 'en' => 'Carbamazepine SJS/TEN risk'],
            'cpic_level' => 'A',
        ],
        'HLA-B' => [
            'name' => ['ja' => 'ヒト白血球抗原B', 'en' => 'Human Leukocyte Antigen B'],
            'chromosome' => '6p21.33',
            'function' => ['ja' => '薬物過敏症リスク', 'en' => 'Drug hypersensitivity risk'],
            'cpic_level' => 'A',
        ],
        'HLA-DRB1' => [
            'name' => ['ja' => 'HLA-DRベータ1', 'en' => 'HLA-DR Beta 1'],
            'chromosome' => '6p21.32',
            'function' => ['ja' => '自己免疫疾患・薬物過敏症', 'en' => 'Autoimmune diseases, drug hypersensitivity'],
            'cpic_level' => 'B',
        ],

        // ===== Warfarin Related =====
        'VKORC1' => [
            'name' => ['ja' => 'ビタミンKエポキシド還元酵素', 'en' => 'Vitamin K Epoxide Reductase'],
            'chromosome' => '16p11.2',
            'function' => ['ja' => 'ワルファリンの標的酵素', 'en' => 'Warfarin target enzyme'],
            'cpic_level' => 'A',
        ],
        'GGCX' => [
            'name' => ['ja' => 'γ-グルタミルカルボキシラーゼ', 'en' => 'Gamma-Glutamyl Carboxylase'],
            'chromosome' => '2p11.2',
            'function' => ['ja' => 'ビタミンK依存性凝固因子の活性化', 'en' => 'Activates vitamin K-dependent clotting factors'],
            'cpic_level' => 'C',
        ],

        // ===== Opioid Related =====
        'OPRM1' => [
            'name' => ['ja' => 'μオピオイド受容体', 'en' => 'Mu Opioid Receptor'],
            'chromosome' => '6q25.2',
            'function' => ['ja' => 'オピオイドの鎮痛効果', 'en' => 'Opioid analgesic effect'],
            'cpic_level' => 'B',
        ],

        // ===== Metabolic Disease Related =====
        'G6PD' => [
            'name' => ['ja' => 'グルコース-6-リン酸脱水素酵素', 'en' => 'Glucose-6-Phosphate Dehydrogenase'],
            'chromosome' => 'Xq28',
            'function' => ['ja' => '酸化ストレス防御（薬物誘発性溶血）', 'en' => 'Oxidative stress defense (drug-induced hemolysis)'],
            'cpic_level' => 'A',
            'sex_linked' => true,  // X-linked: male hemizygous / female hetero determination
        ],
        'MT-RNR1' => [
            'name' => ['ja' => 'ミトコンドリア12S rRNA', 'en' => 'Mitochondrial 12S rRNA'],
            'chromosome' => 'MT',
            'function' => ['ja' => 'アミノグリコシド誘発性難聴', 'en' => 'Aminoglycoside-induced hearing loss'],
            'cpic_level' => 'A',
        ],

        // ===== Cardiovascular =====
        'ADRB1' => [
            'name' => ['ja' => 'β1アドレナリン受容体', 'en' => 'Beta-1 Adrenergic Receptor'],
            'chromosome' => '10q25.3',
            'function' => ['ja' => 'β遮断薬の効果', 'en' => 'Beta-blocker response'],
            'cpic_level' => 'B',
        ],
        'ADRB2' => [
            'name' => ['ja' => 'β2アドレナリン受容体', 'en' => 'Beta-2 Adrenergic Receptor'],
            'chromosome' => '5q32',
            'function' => ['ja' => 'β刺激薬の効果', 'en' => 'Beta-agonist response'],
            'cpic_level' => 'B',
        ],
        'ACE' => [
            'name' => ['ja' => 'アンジオテンシン変換酵素', 'en' => 'Angiotensin Converting Enzyme'],
            'chromosome' => '17q23.3',
            'function' => ['ja' => 'ACE阻害薬の効果・副作用', 'en' => 'ACE inhibitor response'],
            'cpic_level' => 'C',
        ],
        'AGTR1' => [
            'name' => ['ja' => 'アンジオテンシンII受容体1型', 'en' => 'Angiotensin II Receptor Type 1'],
            'chromosome' => '3q24',
            'function' => ['ja' => 'ARBの効果', 'en' => 'ARB response'],
            'cpic_level' => 'C',
        ],
        'ADD1' => [
            'name' => ['ja' => 'α-アダシン', 'en' => 'Alpha-Adducin'],
            'chromosome' => '4p16.3',
            'function' => ['ja' => '利尿薬感受性', 'en' => 'Diuretic sensitivity'],
            'cpic_level' => 'C',
        ],
        'KCNH2' => [
            'name' => ['ja' => 'カリウムチャネルH2', 'en' => 'Potassium Channel H2 (hERG)'],
            'chromosome' => '7q36.1',
            'function' => ['ja' => '薬物誘発性QT延長', 'en' => 'Drug-induced QT prolongation'],
            'cpic_level' => 'B',
        ],
        'SCN5A' => [
            'name' => ['ja' => 'ナトリウムチャネルα5', 'en' => 'Sodium Channel Alpha 5'],
            'chromosome' => '3p22.2',
            'function' => ['ja' => '抗不整脈薬感受性', 'en' => 'Antiarrhythmic drug sensitivity'],
            'cpic_level' => 'B',
        ],

        // ===== Psychiatric/Neurological =====
        'HTR2A' => [
            'name' => ['ja' => 'セロトニン2A受容体', 'en' => 'Serotonin 2A Receptor'],
            'chromosome' => '13q14.2',
            'function' => ['ja' => '抗精神病薬・抗うつ薬の効果', 'en' => 'Antipsychotic/antidepressant response'],
            'cpic_level' => 'B',
        ],
        'HTR2C' => [
            'name' => ['ja' => 'セロトニン2C受容体', 'en' => 'Serotonin 2C Receptor'],
            'chromosome' => 'Xq23',
            'function' => ['ja' => '抗精神病薬誘発性体重増加', 'en' => 'Antipsychotic-induced weight gain'],
            'cpic_level' => 'B',
            'sex_linked' => true,  // X-linked
        ],
        'SLC6A4' => [
            'name' => ['ja' => 'セロトニントランスポーター', 'en' => 'Serotonin Transporter'],
            'chromosome' => '17q11.2',
            'function' => ['ja' => 'SSRI/SNRIの効果', 'en' => 'SSRI/SNRI response'],
            'cpic_level' => 'B',
        ],
        'DRD2' => [
            'name' => ['ja' => 'ドパミンD2受容体', 'en' => 'Dopamine D2 Receptor'],
            'chromosome' => '11q23.2',
            'function' => ['ja' => '抗精神病薬の効果・副作用', 'en' => 'Antipsychotic response'],
            'cpic_level' => 'B',
        ],
        'DRD3' => [
            'name' => ['ja' => 'ドパミンD3受容体', 'en' => 'Dopamine D3 Receptor'],
            'chromosome' => '3q13.31',
            'function' => ['ja' => '抗精神病薬誘発性遅発性ジスキネジア', 'en' => 'Antipsychotic-induced tardive dyskinesia'],
            'cpic_level' => 'C',
        ],
        'BDNF' => [
            'name' => ['ja' => '脳由来神経栄養因子', 'en' => 'Brain-Derived Neurotrophic Factor'],
            'chromosome' => '11p14.1',
            'function' => ['ja' => '抗うつ薬効果', 'en' => 'Antidepressant response'],
            'cpic_level' => 'C',
        ],
        'MTHFR' => [
            'name' => ['ja' => 'メチレンテトラヒドロ葉酸還元酵素', 'en' => 'Methylenetetrahydrofolate Reductase'],
            'chromosome' => '1p36.22',
            'function' => ['ja' => '葉酸代謝・MTX毒性', 'en' => 'Folate metabolism, MTX toxicity'],
            'cpic_level' => 'B',
        ],

        // ===== Immune/Inflammatory =====
        'IL28B' => [
            'name' => ['ja' => 'インターフェロンλ3', 'en' => 'Interferon Lambda 3 (IFNL3)'],
            'chromosome' => '19q13.2',
            'function' => ['ja' => 'HCV治療効果予測', 'en' => 'HCV treatment response'],
            'cpic_level' => 'B',
        ],
        'ITPA' => [
            'name' => ['ja' => 'イノシン三リン酸ピロホスファターゼ', 'en' => 'Inosine Triphosphatase'],
            'chromosome' => '20p13',
            'function' => ['ja' => 'リバビリン誘発性貧血', 'en' => 'Ribavirin-induced anemia'],
            'cpic_level' => 'B',
        ],

        // ===== Diabetes Related =====
        'TCF7L2' => [
            'name' => ['ja' => '転写因子7様2', 'en' => 'Transcription Factor 7-Like 2'],
            'chromosome' => '10q25.2',
            'function' => ['ja' => 'スルホニル尿素の効果', 'en' => 'Sulfonylurea response'],
            'cpic_level' => 'C',
        ],
        'KCNJ11' => [
            'name' => ['ja' => 'カリウムチャネルJ11', 'en' => 'Potassium Channel J11'],
            'chromosome' => '11p15.1',
            'function' => ['ja' => 'スルホニル尿素の効果', 'en' => 'Sulfonylurea response'],
            'cpic_level' => 'B',
        ],
        'PPARG' => [
            'name' => ['ja' => 'ペルオキシソーム増殖因子活性化受容体γ', 'en' => 'PPAR Gamma'],
            'chromosome' => '3p25.2',
            'function' => ['ja' => 'チアゾリジン系の効果', 'en' => 'Thiazolidinedione response'],
            'cpic_level' => 'C',
        ],

        // ===== Additional Anticoagulant Related =====
        'F2' => [
            'name' => ['ja' => 'プロトロンビン', 'en' => 'Prothrombin (Factor II)'],
            'chromosome' => '11p11.2',
            'function' => ['ja' => '血栓リスク', 'en' => 'Thrombosis risk'],
            'cpic_level' => 'C',
        ],
        'F5' => [
            'name' => ['ja' => '第V因子', 'en' => 'Factor V'],
            'chromosome' => '1q24.2',
            'function' => ['ja' => '血栓リスク（ライデン変異）', 'en' => 'Thrombosis risk (Leiden mutation)'],
            'cpic_level' => 'C',
        ],

        // ===== RYR1 Malignant Hyperthermia Related =====
        'RYR1' => [
            'name' => ['ja' => 'リアノジン受容体1', 'en' => 'Ryanodine Receptor 1'],
            'chromosome' => '19q13.2',
            'function' => ['ja' => '悪性高熱リスク', 'en' => 'Malignant hyperthermia risk'],
            'cpic_level' => 'A',
        ],
        'CACNA1S' => [
            'name' => ['ja' => 'カルシウムチャネルα1Sサブユニット', 'en' => 'Calcium Channel Alpha 1S Subunit'],
            'chromosome' => '1q32.1',
            'function' => ['ja' => '悪性高熱リスク', 'en' => 'Malignant hyperthermia risk'],
            'cpic_level' => 'B',
        ],

        // ===== Infectious Disease Related =====
        'CYP2A6' => [
            'name' => ['ja' => 'シトクロムP450 2A6', 'en' => 'Cytochrome P450 2A6'],
            'chromosome' => '19q13.2',
            'function' => ['ja' => 'ニコチン代謝・テガフール活性化', 'en' => 'Metabolizes nicotine, activates tegafur'],
            'cpic_level' => 'B',
        ],

        // ===== Estrogen Metabolism =====
        'CYP19A1' => [
            'name' => ['ja' => 'アロマターゼ', 'en' => 'Aromatase'],
            'chromosome' => '15q21.2',
            'function' => ['ja' => 'アロマターゼ阻害薬の効果', 'en' => 'Aromatase inhibitor response'],
            'cpic_level' => 'B',
        ],
    ];

    /**
     * ALLELES - Gene allele definitions (SSOT)
     *
     * function_score: Function score
     *   2.0 = Increased function
     *   1.0 = Normal function
     *   0.5 = Decreased function
     *   0.0 = No function
     */
    public const ALLELES = [
        // ===== CYP2D6 =====
        'CYP2D6' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*2'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*3'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*4'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*5'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '欠失', 'en' => 'Deletion']],
            '*6'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*7'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*8'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*9'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*10' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*11' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*12' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*14' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*15' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*17' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*29' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*35' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*36' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*41' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*1xN' => ['function' => 'increased', 'score' => 2.0, 'desc' => ['ja' => '増幅', 'en' => 'Duplication']],
            '*2xN' => ['function' => 'increased', 'score' => 2.0, 'desc' => ['ja' => '増幅', 'en' => 'Duplication']],
        ],

        // ===== CYP2C19 =====
        'CYP2C19' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*2'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*3'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*4'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*5'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*6'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*7'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*8'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*9'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*10' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*17' => ['function' => 'increased', 'score' => 2.0, 'desc' => ['ja' => '機能増加', 'en' => 'Increased']],
        ],

        // ===== CYP2C9 =====
        'CYP2C9' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*2'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*3'  => ['function' => 'decreased', 'score' => 0.25,'desc' => ['ja' => '大幅低下', 'en' => 'Substantially decreased']],
            '*4'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*5'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*6'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*8'  => ['function' => 'decreased', 'score' => 0.25,'desc' => ['ja' => '大幅低下', 'en' => 'Substantially decreased']],
            '*11' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*12' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*13' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
        ],

        // ===== CYP3A4 =====
        'CYP3A4' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*1B' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*2'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*3'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*6'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*17' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*18' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*20' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*22' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
        ],

        // ===== CYP3A5 =====
        'CYP3A5' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常（発現あり）', 'en' => 'Normal (expresser)']],
            '*3'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '発現なし', 'en' => 'Non-expresser']],
            '*6'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '発現なし', 'en' => 'Non-expresser']],
            '*7'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '発現なし', 'en' => 'Non-expresser']],
        ],

        // ===== CYP1A2 =====
        'CYP1A2' => [
            '*1A' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*1C' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*1F' => ['function' => 'increased', 'score' => 1.5, 'desc' => ['ja' => '誘導性高', 'en' => 'High inducibility']],
            '*1K' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
        ],

        // ===== CYP2B6 =====
        'CYP2B6' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*4'  => ['function' => 'increased', 'score' => 1.5, 'desc' => ['ja' => '機能増加', 'en' => 'Increased']],
            '*5'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*6'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*7'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*9'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*18' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
        ],

        // ===== CYP2C8 =====
        'CYP2C8' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*2'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*3'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*4'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
        ],

        // ===== CYP2A6 =====
        'CYP2A6' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*2'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*4'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '欠失', 'en' => 'Deletion']],
            '*5'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*7'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*9'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*10' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*12' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*17' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
        ],

        // ===== CYP4F2 =====
        'CYP4F2' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*2'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*3'  => ['function' => 'decreased', 'score' => 0.25,'desc' => ['ja' => '大幅低下', 'en' => 'Substantially decreased']],
        ],

        // ===== VKORC1 =====
        'VKORC1' => [
            'GG'  => ['function' => 'normal',    'sensitivity' => 'normal',   'desc' => ['ja' => '通常感受性', 'en' => 'Normal sensitivity']],
            'GA'  => ['function' => 'sensitive', 'sensitivity' => 'moderate', 'desc' => ['ja' => '中感受性', 'en' => 'Moderate sensitivity']],
            'AA'  => ['function' => 'sensitive', 'sensitivity' => 'high',     'desc' => ['ja' => '高感受性', 'en' => 'High sensitivity']],
        ],

        // ===== SLCO1B1 =====
        'SLCO1B1' => [
            '*1a' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*1b' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*5'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*14' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*15' => ['function' => 'decreased', 'score' => 0.25,'desc' => ['ja' => '大幅低下', 'en' => 'Poor']],
            '*17' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*31' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
        ],

        // ===== ABCB1 (P-gp) =====
        'ABCB1' => [
            '1236CC' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '1236CT' => ['function' => 'decreased', 'score' => 0.75,'desc' => ['ja' => 'やや低下', 'en' => 'Slightly decreased']],
            '1236TT' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '2677GG' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '2677GT' => ['function' => 'decreased', 'score' => 0.75,'desc' => ['ja' => 'やや低下', 'en' => 'Slightly decreased']],
            '2677TT' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '3435CC' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '3435CT' => ['function' => 'decreased', 'score' => 0.75,'desc' => ['ja' => 'やや低下', 'en' => 'Slightly decreased']],
            '3435TT' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
        ],

        // ===== ABCG2 (BCRP) =====
        'ABCG2' => [
            'CC'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'CA'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            'AA'  => ['function' => 'poor',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'Poor function']],
        ],

        // ===== UGT1A1 =====
        'UGT1A1' => [
            '*1'   => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*6'   => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*27'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*28'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            '*36'  => ['function' => 'increased', 'score' => 1.5, 'desc' => ['ja' => '機能増加', 'en' => 'Increased']],
            '*37'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
        ],

        // ===== NAT2 =====
        'NAT2' => [
            '*4'   => ['function' => 'rapid',     'score' => 1.0, 'desc' => ['ja' => '高速型', 'en' => 'Rapid acetylator']],
            '*5'   => ['function' => 'slow',      'score' => 0.0, 'desc' => ['ja' => '遅延型', 'en' => 'Slow acetylator']],
            '*5A'  => ['function' => 'slow',      'score' => 0.0, 'desc' => ['ja' => '遅延型', 'en' => 'Slow acetylator']],
            '*5B'  => ['function' => 'slow',      'score' => 0.0, 'desc' => ['ja' => '遅延型', 'en' => 'Slow acetylator']],
            '*5C'  => ['function' => 'slow',      'score' => 0.0, 'desc' => ['ja' => '遅延型', 'en' => 'Slow acetylator']],
            '*6'   => ['function' => 'slow',      'score' => 0.0, 'desc' => ['ja' => '遅延型', 'en' => 'Slow acetylator']],
            '*6A'  => ['function' => 'slow',      'score' => 0.0, 'desc' => ['ja' => '遅延型', 'en' => 'Slow acetylator']],
            '*7'   => ['function' => 'slow',      'score' => 0.0, 'desc' => ['ja' => '遅延型', 'en' => 'Slow acetylator']],
            '*10'  => ['function' => 'slow',      'score' => 0.0, 'desc' => ['ja' => '遅延型', 'en' => 'Slow acetylator']],
            '*11'  => ['function' => 'slow',      'score' => 0.0, 'desc' => ['ja' => '遅延型', 'en' => 'Slow acetylator']],
            '*12'  => ['function' => 'rapid',     'score' => 1.0, 'desc' => ['ja' => '高速型', 'en' => 'Rapid acetylator']],
            '*13'  => ['function' => 'rapid',     'score' => 1.0, 'desc' => ['ja' => '高速型', 'en' => 'Rapid acetylator']],
            '*14'  => ['function' => 'slow',      'score' => 0.0, 'desc' => ['ja' => '遅延型', 'en' => 'Slow acetylator']],
        ],

        // ===== TPMT =====
        'TPMT' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*2'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*3A' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*3B' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*3C' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*4'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
        ],

        // ===== NUDT15 =====
        'NUDT15' => [
            '*1'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*2'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*3'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*4'  => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*5'  => ['function' => 'uncertain', 'score' => 0.5, 'desc' => ['ja' => '不明', 'en' => 'Uncertain']],
            '*6'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
        ],

        // ===== DPYD =====
        'DPYD' => [
            '*1'   => ['function' => 'normal',    'score' => 1.0,  'desc' => ['ja' => '正常', 'en' => 'Normal']],
            '*2A'  => ['function' => 'none',      'score' => 0.0,  'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            '*13'  => ['function' => 'none',      'score' => 0.0,  'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            'c.2846A>T' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            'c.1679T>G' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
            'c.1236G>A' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
        ],

        // ===== G6PD =====
        'G6PD' => [
            'B'         => ['function' => 'normal',    'class' => 'IV',  'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'A'         => ['function' => 'normal',    'class' => 'IV',  'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'A-'        => ['function' => 'decreased', 'class' => 'III', 'desc' => ['ja' => '機能低下', 'en' => 'Deficient (Class III)']],
            'Mediterranean' => ['function' => 'poor',  'class' => 'II',  'desc' => ['ja' => '重度欠損', 'en' => 'Severely deficient (Class II)']],
            'Canton'    => ['function' => 'poor',      'class' => 'II',  'desc' => ['ja' => '重度欠損', 'en' => 'Severely deficient (Class II)']],
            'Mahidol'   => ['function' => 'poor',      'class' => 'III', 'desc' => ['ja' => '欠損', 'en' => 'Deficient (Class III)']],
            'Orissa'    => ['function' => 'poor',      'class' => 'III', 'desc' => ['ja' => '欠損', 'en' => 'Deficient (Class III)']],
            'Seattle'   => ['function' => 'decreased', 'class' => 'III', 'desc' => ['ja' => '機能低下', 'en' => 'Deficient (Class III)']],
        ],

        // ===== HLA-A =====
        'HLA-A' => [
            '*31:01' => ['risk' => 'carbamazepine_sjs_ten', 'desc' => ['ja' => 'カルバマゼピンSJS/TENリスク', 'en' => 'Carbamazepine SJS/TEN risk']],
            '*02:01' => ['risk' => 'none', 'desc' => ['ja' => 'リスクなし', 'en' => 'No significant risk']],
        ],

        // ===== HLA-B =====
        'HLA-B' => [
            '*57:01' => ['risk' => 'abacavir_hypersensitivity', 'desc' => ['ja' => 'アバカビル過敏症リスク', 'en' => 'Abacavir hypersensitivity']],
            '*15:02' => ['risk' => 'sjs_ten_carbamazepine',     'desc' => ['ja' => 'カルバマゼピンSJS/TENリスク', 'en' => 'Carbamazepine SJS/TEN risk']],
            '*58:01' => ['risk' => 'sjs_ten_allopurinol',       'desc' => ['ja' => 'アロプリノールSJS/TENリスク', 'en' => 'Allopurinol SJS/TEN risk']],
            '*13:01' => ['risk' => 'dapsone_hypersensitivity',  'desc' => ['ja' => 'ダプソン過敏症リスク', 'en' => 'Dapsone hypersensitivity']],
            '*15:11' => ['risk' => 'sjs_ten_carbamazepine',     'desc' => ['ja' => 'カルバマゼピンSJS/TENリスク', 'en' => 'Carbamazepine SJS/TEN risk']],
            '*35:05' => ['risk' => 'nevirapine_hypersensitivity','desc'=> ['ja' => 'ネビラピン過敏症リスク', 'en' => 'Nevirapine hypersensitivity']],
            '*07:02' => ['risk' => 'none', 'desc' => ['ja' => 'リスクなし', 'en' => 'No significant risk']],
        ],

        // ===== HLA-DRB1 =====
        'HLA-DRB1' => [
            '*07:01' => ['risk' => 'ximelagatran_hepatotoxicity', 'desc' => ['ja' => 'キシメラガトラン肝毒性リスク', 'en' => 'Ximelagatran hepatotoxicity']],
            '*15:01' => ['risk' => 'multiple_drugs',              'desc' => ['ja' => '複数薬物リスク', 'en' => 'Multiple drug risks']],
        ],

        // ===== OPRM1 =====
        'OPRM1' => [
            'AA'  => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'AG'  => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '効果減弱', 'en' => 'Decreased response']],
            'GG'  => ['function' => 'decreased', 'score' => 0.0, 'desc' => ['ja' => '効果減弱', 'en' => 'Decreased response']],
        ],

        // ===== COMT =====
        'COMT' => [
            'Val/Val' => ['function' => 'high',    'score' => 1.0, 'desc' => ['ja' => '高活性', 'en' => 'High activity']],
            'Val/Met' => ['function' => 'normal',  'score' => 0.75,'desc' => ['ja' => '中間', 'en' => 'Intermediate']],
            'Met/Met' => ['function' => 'low',     'score' => 0.5, 'desc' => ['ja' => '低活性', 'en' => 'Low activity']],
        ],

        // ===== MTHFR =====
        'MTHFR' => [
            'CC' => ['function' => 'normal',    'score' => 1.0,  'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'CT' => ['function' => 'decreased', 'score' => 0.65, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased (35% reduction)']],
            'TT' => ['function' => 'decreased', 'score' => 0.30, 'desc' => ['ja' => '大幅低下', 'en' => 'Decreased (70% reduction)']],
        ],

        // ===== ADRB1 =====
        'ADRB1' => [
            'Ser49Ser' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'Ser49Gly' => ['function' => 'enhanced',  'score' => 1.25,'desc' => ['ja' => '効果増強', 'en' => 'Enhanced response']],
            'Gly49Gly' => ['function' => 'enhanced',  'score' => 1.5, 'desc' => ['ja' => '効果増強', 'en' => 'Enhanced response']],
            'Arg389Arg'=> ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'Arg389Gly'=> ['function' => 'decreased', 'score' => 0.75,'desc' => ['ja' => 'やや低下', 'en' => 'Slightly decreased']],
            'Gly389Gly'=> ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '効果減弱', 'en' => 'Decreased response']],
        ],

        // ===== ADRB2 =====
        'ADRB2' => [
            'Arg16Arg' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'Arg16Gly' => ['function' => 'decreased', 'score' => 0.75,'desc' => ['ja' => 'やや低下', 'en' => 'Slightly decreased']],
            'Gly16Gly' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '効果減弱', 'en' => 'Decreased']],
            'Gln27Gln' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'Gln27Glu' => ['function' => 'decreased', 'score' => 0.75,'desc' => ['ja' => 'やや低下', 'en' => 'Slightly decreased']],
            'Glu27Glu' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '効果減弱', 'en' => 'Decreased']],
        ],

        // ===== HTR2A =====
        'HTR2A' => [
            'TT' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'TC' => ['function' => 'decreased', 'score' => 0.75,'desc' => ['ja' => 'やや低下', 'en' => 'Slightly decreased']],
            'CC' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '効果減弱', 'en' => 'Decreased']],
        ],

        // ===== SLC6A4 (5-HTTLPR) =====
        'SLC6A4' => [
            'L/L' => ['function' => 'high',    'score' => 1.0, 'desc' => ['ja' => '高発現', 'en' => 'High expression']],
            'L/S' => ['function' => 'normal',  'score' => 0.75,'desc' => ['ja' => '中間', 'en' => 'Intermediate']],
            'S/S' => ['function' => 'low',     'score' => 0.5, 'desc' => ['ja' => '低発現', 'en' => 'Low expression']],
        ],

        // ===== IL28B (IFNL3) =====
        'IL28B' => [
            'CC' => ['function' => 'favorable',   'score' => 1.0, 'desc' => ['ja' => '良好応答', 'en' => 'Favorable response']],
            'CT' => ['function' => 'intermediate','score' => 0.5, 'desc' => ['ja' => '中間', 'en' => 'Intermediate']],
            'TT' => ['function' => 'poor',        'score' => 0.0, 'desc' => ['ja' => '低応答', 'en' => 'Poor response']],
        ],

        // ===== ITPA =====
        'ITPA' => [
            'CC' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'CA' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => '機能低下', 'en' => 'Decreased']],
            'AA' => ['function' => 'none',      'score' => 0.0, 'desc' => ['ja' => '機能なし', 'en' => 'No function']],
        ],

        // ===== KCNH2 (hERG) =====
        'KCNH2' => [
            'KK' => ['function' => 'normal',    'score' => 1.0, 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'KR' => ['function' => 'decreased', 'score' => 0.5, 'desc' => ['ja' => 'QT延長リスク', 'en' => 'QT prolongation risk']],
            'RR' => ['function' => 'poor',      'score' => 0.0, 'desc' => ['ja' => 'QT延長高リスク', 'en' => 'High QT prolongation risk']],
        ],

        // ===== F5 (Factor V Leiden) =====
        'F5' => [
            'GG' => ['function' => 'normal',    'risk' => 'normal',   'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'GA' => ['function' => 'risk',      'risk' => 'moderate', 'desc' => ['ja' => '血栓リスク中', 'en' => 'Moderate thrombosis risk']],
            'AA' => ['function' => 'high_risk', 'risk' => 'high',     'desc' => ['ja' => '血栓リスク高', 'en' => 'High thrombosis risk']],
        ],

        // ===== F2 (Prothrombin) =====
        'F2' => [
            'GG' => ['function' => 'normal',    'risk' => 'normal',   'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'GA' => ['function' => 'risk',      'risk' => 'moderate', 'desc' => ['ja' => '血栓リスク中', 'en' => 'Moderate thrombosis risk']],
            'AA' => ['function' => 'high_risk', 'risk' => 'high',     'desc' => ['ja' => '血栓リスク高', 'en' => 'High thrombosis risk']],
        ],

        // ===== RYR1 =====
        'RYR1' => [
            'normal' => ['function' => 'normal', 'risk' => 'none', 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'MHS'    => ['function' => 'risk',   'risk' => 'high', 'desc' => ['ja' => '悪性高熱リスク', 'en' => 'Malignant hyperthermia susceptible']],
        ],

        // ===== MT-RNR1 =====
        'MT-RNR1' => [
            'A1555A' => ['function' => 'normal', 'risk' => 'none', 'desc' => ['ja' => '正常', 'en' => 'Normal']],
            'A1555G' => ['function' => 'risk',   'risk' => 'high', 'desc' => ['ja' => 'アミノグリコシド難聴リスク', 'en' => 'Aminoglycoside-induced hearing loss risk']],
            'C1494T' => ['function' => 'risk',   'risk' => 'high', 'desc' => ['ja' => 'アミノグリコシド難聴リスク', 'en' => 'Aminoglycoside-induced hearing loss risk']],
        ],
    ];

    /**
     * SNP_MARKERS - SNPs detectable in DTC genetic testing (SSOT)
     *
     * rsIDs detectable in 23andMe/AncestryDNA RAW data
     * ref: Reference allele
     * alt: Alternate allele
     * allele_call: Allele inferred from this SNP
     */
    public const SNP_MARKERS = [
        // ===== CYP2D6 =====
        'rs3892097'  => ['gene' => 'CYP2D6',  'allele' => '*4',  'ref' => 'C', 'alt' => 'T', 'effect' => 'splicing_defect'],
        'rs35742686' => ['gene' => 'CYP2D6',  'allele' => '*3',  'ref' => 'T', 'alt' => 'del', 'effect' => 'frameshift'],
        'rs5030655'  => ['gene' => 'CYP2D6',  'allele' => '*6',  'ref' => 'T', 'alt' => 'del', 'effect' => 'frameshift'],
        'rs5030867'  => ['gene' => 'CYP2D6',  'allele' => '*7',  'ref' => 'A', 'alt' => 'C', 'effect' => 'H324P'],
        'rs5030865'  => ['gene' => 'CYP2D6',  'allele' => '*8',  'ref' => 'G', 'alt' => 'T', 'effect' => 'stop_codon'],
        'rs5030656'  => ['gene' => 'CYP2D6',  'allele' => '*9',  'ref' => 'AAG', 'alt' => 'del', 'effect' => 'K281del'],
        'rs1065852'  => ['gene' => 'CYP2D6',  'allele' => '*10', 'ref' => 'C', 'alt' => 'T', 'effect' => 'P34S'],
        'rs28371706' => ['gene' => 'CYP2D6',  'allele' => '*17', 'ref' => 'C', 'alt' => 'T', 'effect' => 'T107I'],
        'rs16947'    => ['gene' => 'CYP2D6',  'allele' => '*2',  'ref' => 'G', 'alt' => 'A', 'effect' => 'R296C'],
        'rs1135840'  => ['gene' => 'CYP2D6',  'allele' => '*2',  'ref' => 'C', 'alt' => 'G', 'effect' => 'S486T'],
        'rs28371725' => ['gene' => 'CYP2D6',  'allele' => '*41', 'ref' => 'C', 'alt' => 'T', 'effect' => 'splicing'],
        'rs59421388' => ['gene' => 'CYP2D6',  'allele' => '*29', 'ref' => 'G', 'alt' => 'A', 'effect' => 'V136I'],

        // ===== CYP2C19 =====
        'rs4244285'  => ['gene' => 'CYP2C19', 'allele' => '*2',  'ref' => 'G', 'alt' => 'A', 'effect' => 'splicing_defect'],
        'rs4986893'  => ['gene' => 'CYP2C19', 'allele' => '*3',  'ref' => 'G', 'alt' => 'A', 'effect' => 'stop_codon'],
        'rs28399504' => ['gene' => 'CYP2C19', 'allele' => '*4',  'ref' => 'A', 'alt' => 'G', 'effect' => 'splicing'],
        'rs56337013' => ['gene' => 'CYP2C19', 'allele' => '*5',  'ref' => 'C', 'alt' => 'T', 'effect' => 'R433W'],
        'rs72552267' => ['gene' => 'CYP2C19', 'allele' => '*6',  'ref' => 'G', 'alt' => 'A', 'effect' => 'R132Q'],
        'rs72558186' => ['gene' => 'CYP2C19', 'allele' => '*7',  'ref' => 'T', 'alt' => 'A', 'effect' => 'splicing'],
        'rs41291556' => ['gene' => 'CYP2C19', 'allele' => '*8',  'ref' => 'T', 'alt' => 'C', 'effect' => 'W120R'],
        'rs17884712' => ['gene' => 'CYP2C19', 'allele' => '*9',  'ref' => 'G', 'alt' => 'A', 'effect' => 'R144H'],
        'rs6413438'  => ['gene' => 'CYP2C19', 'allele' => '*10', 'ref' => 'C', 'alt' => 'T', 'effect' => 'P227L'],
        'rs12248560' => ['gene' => 'CYP2C19', 'allele' => '*17', 'ref' => 'C', 'alt' => 'T', 'effect' => 'increased_expression'],

        // ===== CYP2C9 =====
        'rs1799853'  => ['gene' => 'CYP2C9',  'allele' => '*2',  'ref' => 'C', 'alt' => 'T', 'effect' => 'R144C'],
        'rs1057910'  => ['gene' => 'CYP2C9',  'allele' => '*3',  'ref' => 'A', 'alt' => 'C', 'effect' => 'I359L'],
        'rs56165452' => ['gene' => 'CYP2C9',  'allele' => '*4',  'ref' => 'T', 'alt' => 'C', 'effect' => 'I359T'],
        'rs28371686' => ['gene' => 'CYP2C9',  'allele' => '*5',  'ref' => 'C', 'alt' => 'G', 'effect' => 'D360E'],
        'rs9332131'  => ['gene' => 'CYP2C9',  'allele' => '*6',  'ref' => 'A', 'alt' => 'del', 'effect' => 'frameshift'],
        'rs7900194'  => ['gene' => 'CYP2C9',  'allele' => '*8',  'ref' => 'G', 'alt' => 'A', 'effect' => 'R150H'],
        'rs28371685' => ['gene' => 'CYP2C9',  'allele' => '*11', 'ref' => 'C', 'alt' => 'T', 'effect' => 'R335W'],
        'rs9332239'  => ['gene' => 'CYP2C9',  'allele' => '*12', 'ref' => 'C', 'alt' => 'T', 'effect' => 'P489S'],

        // ===== CYP3A4 =====
        'rs35599367' => ['gene' => 'CYP3A4',  'allele' => '*22', 'ref' => 'C', 'alt' => 'T', 'effect' => 'reduced_expression'],
        'rs2740574'  => ['gene' => 'CYP3A4',  'allele' => '*1B', 'ref' => 'A', 'alt' => 'G', 'effect' => 'promoter'],
        'rs4986910'  => ['gene' => 'CYP3A4',  'allele' => '*3',  'ref' => 'T', 'alt' => 'C', 'effect' => 'M445T'],
        'rs55785340' => ['gene' => 'CYP3A4',  'allele' => '*2',  'ref' => 'T', 'alt' => 'C', 'effect' => 'S222P'],

        // ===== CYP3A5 =====
        'rs776746'   => ['gene' => 'CYP3A5',  'allele' => '*3',  'ref' => 'C', 'alt' => 'T', 'effect' => 'splicing_defect'],
        'rs10264272' => ['gene' => 'CYP3A5',  'allele' => '*6',  'ref' => 'C', 'alt' => 'T', 'effect' => 'splicing_defect'],
        'rs41303343' => ['gene' => 'CYP3A5',  'allele' => '*7',  'ref' => 'T', 'alt' => 'ins', 'effect' => 'frameshift'],

        // ===== CYP1A2 =====
        'rs762551'   => ['gene' => 'CYP1A2',  'allele' => '*1F', 'ref' => 'A', 'alt' => 'C', 'effect' => 'high_inducibility'],
        'rs2069514'  => ['gene' => 'CYP1A2',  'allele' => '*1C', 'ref' => 'G', 'alt' => 'A', 'effect' => 'decreased_expression'],

        // ===== CYP2B6 =====
        'rs3745274'  => ['gene' => 'CYP2B6',  'allele' => '*6',  'ref' => 'G', 'alt' => 'T', 'effect' => 'Q172H'],
        'rs2279343'  => ['gene' => 'CYP2B6',  'allele' => '*4',  'ref' => 'A', 'alt' => 'G', 'effect' => 'K262R'],
        'rs3211371'  => ['gene' => 'CYP2B6',  'allele' => '*5',  'ref' => 'C', 'alt' => 'T', 'effect' => 'R487C'],
        'rs28399499' => ['gene' => 'CYP2B6',  'allele' => '*18', 'ref' => 'T', 'alt' => 'C', 'effect' => 'I328T'],

        // ===== CYP2C8 =====
        'rs11572080' => ['gene' => 'CYP2C8',  'allele' => '*2',  'ref' => 'A', 'alt' => 'G', 'effect' => 'I269F'],
        'rs10509681' => ['gene' => 'CYP2C8',  'allele' => '*3',  'ref' => 'T', 'alt' => 'G', 'effect' => 'K399R'],
        'rs1058930'  => ['gene' => 'CYP2C8',  'allele' => '*4',  'ref' => 'C', 'alt' => 'G', 'effect' => 'I264M'],

        // ===== CYP2A6 =====
        'rs1801272'  => ['gene' => 'CYP2A6',  'allele' => '*2',  'ref' => 'T', 'alt' => 'A', 'effect' => 'L160H'],
        'rs28399433' => ['gene' => 'CYP2A6',  'allele' => '*9',  'ref' => 'G', 'alt' => 'T', 'effect' => 'promoter'],
        'rs5031016'  => ['gene' => 'CYP2A6',  'allele' => '*7',  'ref' => 'G', 'alt' => 'A', 'effect' => 'I471T'],
        'rs28399454' => ['gene' => 'CYP2A6',  'allele' => '*12', 'ref' => 'C', 'alt' => 'T', 'effect' => 'chimeric'],

        // ===== CYP4F2 =====
        'rs2108622'  => ['gene' => 'CYP4F2',  'allele' => '*3',  'ref' => 'C', 'alt' => 'T', 'effect' => 'V433M'],

        // ===== VKORC1 =====
        'rs9923231'  => ['gene' => 'VKORC1',  'allele' => '-1639G>A', 'ref' => 'G', 'alt' => 'A', 'effect' => 'reduced_expression'],
        'rs9934438'  => ['gene' => 'VKORC1',  'allele' => '1173C>T',  'ref' => 'C', 'alt' => 'T', 'effect' => 'reduced_expression'],
        'rs7294'     => ['gene' => 'VKORC1',  'allele' => '3730G>A',  'ref' => 'G', 'alt' => 'A', 'effect' => 'reduced_expression'],

        // ===== SLCO1B1 =====
        'rs4149056'  => ['gene' => 'SLCO1B1', 'allele' => '*5',  'ref' => 'T', 'alt' => 'C', 'effect' => 'V174A'],
        'rs2306283'  => ['gene' => 'SLCO1B1', 'allele' => '*1b', 'ref' => 'A', 'alt' => 'G', 'effect' => 'N130D'],
        'rs11045819' => ['gene' => 'SLCO1B1', 'allele' => '*14', 'ref' => 'C', 'alt' => 'A', 'effect' => 'P155T'],

        // ===== ABCB1 (P-gp) =====
        'rs1045642'  => ['gene' => 'ABCB1',   'allele' => '3435C>T', 'ref' => 'C', 'alt' => 'T', 'effect' => 'I1145I'],
        'rs1128503'  => ['gene' => 'ABCB1',   'allele' => '1236C>T', 'ref' => 'C', 'alt' => 'T', 'effect' => 'G412G'],
        'rs2032582'  => ['gene' => 'ABCB1',   'allele' => '2677G>T', 'ref' => 'G', 'alt' => 'T', 'effect' => 'A893S'],

        // ===== ABCG2 (BCRP) =====
        'rs2231142'  => ['gene' => 'ABCG2',   'allele' => '421C>A',  'ref' => 'C', 'alt' => 'A', 'effect' => 'Q141K'],

        // ===== UGT1A1 =====
        'rs8175347'  => ['gene' => 'UGT1A1',  'allele' => '*28', 'ref' => 'TA6', 'alt' => 'TA7', 'effect' => 'promoter_repeat'],
        'rs4148323'  => ['gene' => 'UGT1A1',  'allele' => '*6',  'ref' => 'G', 'alt' => 'A', 'effect' => 'G71R'],
        'rs35350960' => ['gene' => 'UGT1A1',  'allele' => '*27', 'ref' => 'C', 'alt' => 'A', 'effect' => 'P229Q'],

        // ===== NAT2 =====
        'rs1801280'  => ['gene' => 'NAT2',    'allele' => '*5',  'ref' => 'T', 'alt' => 'C', 'effect' => 'I114T'],
        'rs1799930'  => ['gene' => 'NAT2',    'allele' => '*6',  'ref' => 'G', 'alt' => 'A', 'effect' => 'R197Q'],
        'rs1799931'  => ['gene' => 'NAT2',    'allele' => '*7',  'ref' => 'G', 'alt' => 'A', 'effect' => 'G286E'],
        'rs1801279'  => ['gene' => 'NAT2',    'allele' => '*14', 'ref' => 'G', 'alt' => 'A', 'effect' => 'R64Q'],
        'rs1208'     => ['gene' => 'NAT2',    'allele' => '*4',  'ref' => 'A', 'alt' => 'G', 'effect' => 'K268R'],

        // ===== TPMT =====
        'rs1800462'  => ['gene' => 'TPMT',    'allele' => '*2',  'ref' => 'C', 'alt' => 'G', 'effect' => 'A80P'],
        'rs1800460'  => ['gene' => 'TPMT',    'allele' => '*3B', 'ref' => 'C', 'alt' => 'T', 'effect' => 'A154T'],
        'rs1142345'  => ['gene' => 'TPMT',    'allele' => '*3C', 'ref' => 'A', 'alt' => 'G', 'effect' => 'Y240C'],

        // ===== NUDT15 =====
        'rs116855232' => ['gene' => 'NUDT15', 'allele' => '*3',  'ref' => 'C', 'alt' => 'T', 'effect' => 'R139C'],
        'rs746071566' => ['gene' => 'NUDT15', 'allele' => '*2',  'ref' => 'GAGTC', 'alt' => 'del', 'effect' => 'frameshift'],
        'rs186364861' => ['gene' => 'NUDT15', 'allele' => '*4',  'ref' => 'G', 'alt' => 'A', 'effect' => 'R139H'],

        // ===== DPYD =====
        'rs3918290'  => ['gene' => 'DPYD',    'allele' => '*2A', 'ref' => 'C', 'alt' => 'T', 'effect' => 'splicing_defect'],
        'rs55886062' => ['gene' => 'DPYD',    'allele' => '*13', 'ref' => 'A', 'alt' => 'C', 'effect' => 'I560S'],
        'rs67376798' => ['gene' => 'DPYD',    'allele' => 'c.2846A>T', 'ref' => 'A', 'alt' => 'T', 'effect' => 'D949V'],
        'rs75017182' => ['gene' => 'DPYD',    'allele' => 'c.1679T>G', 'ref' => 'T', 'alt' => 'G', 'effect' => 'I560S'],
        'rs56038477' => ['gene' => 'DPYD',    'allele' => 'c.1236G>A', 'ref' => 'G', 'alt' => 'A', 'effect' => 'E412E'],

        // ===== G6PD =====
        'rs1050828'  => ['gene' => 'G6PD',    'allele' => 'A-', 'ref' => 'G', 'alt' => 'A', 'effect' => 'V68M'],
        'rs1050829'  => ['gene' => 'G6PD',    'allele' => 'A',  'ref' => 'A', 'alt' => 'G', 'effect' => 'N126D'],
        'rs5030868'  => ['gene' => 'G6PD',    'allele' => 'Mediterranean', 'ref' => 'C', 'alt' => 'T', 'effect' => 'S188F'],
        'rs72554665' => ['gene' => 'G6PD',    'allele' => 'Canton', 'ref' => 'G', 'alt' => 'T', 'effect' => 'R459L'],

        // ===== HLA =====
        'rs2395029'  => ['gene' => 'HLA-B',   'allele' => '*57:01', 'ref' => 'T', 'alt' => 'G', 'effect' => 'tag_snp'],
        'rs3909184'  => ['gene' => 'HLA-B',   'allele' => '*15:02', 'ref' => 'A', 'alt' => 'G', 'effect' => 'tag_snp'],
        'rs1061235'  => ['gene' => 'HLA-B',   'allele' => '*58:01', 'ref' => 'C', 'alt' => 'T', 'effect' => 'tag_snp'],
        'rs1633021'  => ['gene' => 'HLA-A',   'allele' => '*31:01', 'ref' => 'C', 'alt' => 'T', 'effect' => 'tag_snp'],
        'rs4151659'  => ['gene' => 'HLA-B',   'allele' => '*13:01', 'ref' => 'C', 'alt' => 'T', 'effect' => 'tag_snp'],

        // ===== OPRM1 =====
        'rs1799971'  => ['gene' => 'OPRM1',   'allele' => 'A118G', 'ref' => 'A', 'alt' => 'G', 'effect' => 'N40D'],

        // ===== COMT =====
        'rs4680'     => ['gene' => 'COMT',    'allele' => 'Val158Met', 'ref' => 'G', 'alt' => 'A', 'effect' => 'V158M'],

        // ===== MTHFR =====
        'rs1801133'  => ['gene' => 'MTHFR',   'allele' => 'C677T', 'ref' => 'C', 'alt' => 'T', 'effect' => 'A222V'],
        'rs1801131'  => ['gene' => 'MTHFR',   'allele' => 'A1298C', 'ref' => 'A', 'alt' => 'C', 'effect' => 'E429A'],

        // ===== ADRB1/ADRB2 =====
        'rs1801252'  => ['gene' => 'ADRB1',   'allele' => 'Ser49Gly', 'ref' => 'A', 'alt' => 'G', 'effect' => 'S49G'],
        'rs1801253'  => ['gene' => 'ADRB1',   'allele' => 'Arg389Gly', 'ref' => 'C', 'alt' => 'G', 'effect' => 'R389G'],
        'rs1042713'  => ['gene' => 'ADRB2',   'allele' => 'Arg16Gly', 'ref' => 'G', 'alt' => 'A', 'effect' => 'R16G'],
        'rs1042714'  => ['gene' => 'ADRB2',   'allele' => 'Gln27Glu', 'ref' => 'C', 'alt' => 'G', 'effect' => 'Q27E'],

        // ===== HTR2A/SLC6A4 =====
        'rs6313'     => ['gene' => 'HTR2A',   'allele' => 'T102C', 'ref' => 'C', 'alt' => 'T', 'effect' => 'silent'],
        'rs7997012'  => ['gene' => 'HTR2A',   'allele' => 'A-1438G', 'ref' => 'A', 'alt' => 'G', 'effect' => 'promoter'],

        // ===== IL28B (IFNL3) =====
        'rs12979860' => ['gene' => 'IL28B',   'allele' => 'rs12979860', 'ref' => 'C', 'alt' => 'T', 'effect' => 'expression'],
        'rs8099917'  => ['gene' => 'IL28B',   'allele' => 'rs8099917',  'ref' => 'T', 'alt' => 'G', 'effect' => 'expression'],

        // ===== ITPA =====
        'rs1127354'  => ['gene' => 'ITPA',    'allele' => 'P32T', 'ref' => 'C', 'alt' => 'A', 'effect' => 'P32T'],
        'rs7270101'  => ['gene' => 'ITPA',    'allele' => 'IVS2+21A>C', 'ref' => 'A', 'alt' => 'C', 'effect' => 'splicing'],

        // ===== F5 (Factor V Leiden) =====
        'rs6025'     => ['gene' => 'F5',      'allele' => 'Leiden', 'ref' => 'G', 'alt' => 'A', 'effect' => 'R506Q'],

        // ===== F2 (Prothrombin) =====
        'rs1799963'  => ['gene' => 'F2',      'allele' => 'G20210A', 'ref' => 'G', 'alt' => 'A', 'effect' => '3UTR'],

        // ===== MT-RNR1 =====
        'rs267606617' => ['gene' => 'MT-RNR1', 'allele' => 'A1555G', 'ref' => 'A', 'alt' => 'G', 'effect' => 'ribosomal'],
        'rs267606618' => ['gene' => 'MT-RNR1', 'allele' => 'C1494T', 'ref' => 'C', 'alt' => 'T', 'effect' => 'ribosomal'],

        // ===== KCNH2 =====
        'rs1805123'  => ['gene' => 'KCNH2',   'allele' => 'K897T', 'ref' => 'A', 'alt' => 'C', 'effect' => 'K897T'],

        // ===== KCNJ11 =====
        'rs5219'     => ['gene' => 'KCNJ11',  'allele' => 'E23K',  'ref' => 'C', 'alt' => 'T', 'effect' => 'E23K'],

        // ===== TCF7L2 =====
        'rs7903146'  => ['gene' => 'TCF7L2',  'allele' => 'rs7903146', 'ref' => 'C', 'alt' => 'T', 'effect' => 'intronic'],

        // ===== GSTP1 =====
        'rs1695'     => ['gene' => 'GSTP1',   'allele' => 'I105V', 'ref' => 'A', 'alt' => 'G', 'effect' => 'I105V'],
        'rs1138272'  => ['gene' => 'GSTP1',   'allele' => 'A114V', 'ref' => 'C', 'alt' => 'T', 'effect' => 'A114V'],

        // ===== DRD2 =====
        'rs1800497'  => ['gene' => 'DRD2',    'allele' => 'Taq1A', 'ref' => 'G', 'alt' => 'A', 'effect' => 'E713K'],

        // ===== ACE =====
        'rs4646994'  => ['gene' => 'ACE',     'allele' => 'I/D',   'ref' => 'I', 'alt' => 'D', 'effect' => 'insertion_deletion'],
    ];

    /**
     * CHIP_VERSIONS - 23andMe/AncestryDNA chip version definitions (SSOT)
     *
     * Detected by characteristic rsID patterns for each version
     * - signature_snps: Marker SNPs present in that version
     * - missing_snps: SNPs likely missing in that version
     *
     * 23andMe v4 (2017-2020): Illumina OmniExpress + custom
     * 23andMe v5 (2020+): Illumina GSA + custom
     */
    public const CHIP_VERSIONS = [
        'v4' => [
            'name' => ['ja' => '23andMe v4', 'en' => '23andMe v4'],
            'year_range' => '2017-2020',
            'platform' => 'Illumina OmniExpress',
            'signature_snps' => [
                'rs12248560',  // CYP2C19*17 - high coverage in v4
                'rs28371725',  // CYP2D6*41 - high coverage in v4
                'rs1800460',   // TPMT*3B - present in v4
            ],
            'missing_snps' => [
                'rs55886062',  // DPYD*13 - high missing rate in v4
            ],
        ],
        'v5' => [
            'name' => ['ja' => '23andMe v5', 'en' => '23andMe v5'],
            'year_range' => '2020+',
            'platform' => 'Illumina GSA',
            'signature_snps' => [
                'rs4149056',   // SLCO1B1*5 - high coverage in v5
                'rs3918290',   // DPYD*2A - high coverage in v5
                'rs55886062',  // DPYD*13 - added in v5
            ],
            'missing_snps' => [
                'rs5030655',   // CYP2D6*6 - high missing rate in v5
            ],
        ],
        'ancestrydna' => [
            'name' => ['ja' => 'AncestryDNA', 'en' => 'AncestryDNA'],
            'year_range' => '2012+',
            'platform' => 'Illumina OmniExpress',
            'signature_snps' => [
                'rs1799853',   // CYP2C9*2
                'rs1057910',   // CYP2C9*3
                'rs9923231',   // VKORC1
            ],
            'missing_snps' => [
                'rs3892097',   // CYP2D6*4 - low coverage
                'rs28371725',  // CYP2D6*41 - low coverage
            ],
        ],
        'unknown' => [
            'name' => ['ja' => '不明', 'en' => 'Unknown'],
            'year_range' => '',
            'platform' => '',
            'signature_snps' => [],
            'missing_snps' => [],
        ],
    ];

    /**
     * PROXY_SNPS - Alternative SNP mapping based on linkage disequilibrium (SSOT)
     *
     * target: Target rsID (SNP to infer when missing)
     * proxy: Alternative rsID (linked SNP)
     * r2: Linkage disequilibrium coefficient (0.0-1.0, higher = more reliable)
     * population: Target population (EAS=East Asian, EUR=European, AFR=African, ALL=All populations)
     * phase_rule: Phase rule (same=same phase, opposite=opposite phase)
     *
     * r² ≥ 0.8 recommended (PharmGKB/CPIC standard)
     */
    public const PROXY_SNPS = [
        // CYP2D6 Proxy SNPs
        [
            'target' => 'rs3892097',      // CYP2D6*4
            'proxy' => 'rs1080985',       // Tag SNP near CYP2D6
            'r2' => 0.85,
            'population' => 'EUR',
            'phase_rule' => 'same',
            'gene' => 'CYP2D6',
            'allele' => '*4',
        ],
        [
            'target' => 'rs28371725',     // CYP2D6*41
            'proxy' => 'rs28371706',      // Nearby SNP
            'r2' => 0.92,
            'population' => 'ALL',
            'phase_rule' => 'same',
            'gene' => 'CYP2D6',
            'allele' => '*41',
        ],

        // CYP2C19 Proxy SNPs
        [
            'target' => 'rs4244285',      // CYP2C19*2
            'proxy' => 'rs12769205',      // Intron tag SNP
            'r2' => 0.95,
            'population' => 'ALL',
            'phase_rule' => 'same',
            'gene' => 'CYP2C19',
            'allele' => '*2',
        ],
        [
            'target' => 'rs12248560',     // CYP2C19*17
            'proxy' => 'rs11188072',      // Promoter region SNP
            'r2' => 0.88,
            'population' => 'EUR',
            'phase_rule' => 'same',
            'gene' => 'CYP2C19',
            'allele' => '*17',
        ],

        // CYP2C9 Proxy SNPs
        [
            'target' => 'rs1799853',      // CYP2C9*2
            'proxy' => 'rs9332131',       // Nearby SNP
            'r2' => 0.82,
            'population' => 'EUR',
            'phase_rule' => 'same',
            'gene' => 'CYP2C9',
            'allele' => '*2',
        ],
        [
            'target' => 'rs1057910',      // CYP2C9*3
            'proxy' => 'rs2256871',       // Tag SNP
            'r2' => 0.90,
            'population' => 'ALL',
            'phase_rule' => 'same',
            'gene' => 'CYP2C9',
            'allele' => '*3',
        ],

        // VKORC1 Proxy SNPs
        [
            'target' => 'rs9923231',      // VKORC1 -1639G>A
            'proxy' => 'rs9934438',       // Intron 1 tag SNP (1173C>T)
            'r2' => 0.98,
            'population' => 'ALL',
            'phase_rule' => 'same',
            'gene' => 'VKORC1',
            'allele' => '-1639G>A',
        ],
        [
            'target' => 'rs9923231',      // VKORC1 -1639G>A
            'proxy' => 'rs2359612',       // Nearby tag SNP
            'r2' => 0.95,
            'population' => 'EAS',
            'phase_rule' => 'same',
            'gene' => 'VKORC1',
            'allele' => '-1639G>A',
        ],

        // SLCO1B1 Proxy SNPs
        [
            'target' => 'rs4149056',      // SLCO1B1*5 (521T>C)
            'proxy' => 'rs2306283',       // SLCO1B1*1b (388A>G)
            'r2' => 0.65,                 // Moderate LD (for reference)
            'population' => 'ALL',
            'phase_rule' => 'opposite',   // Inverse correlation
            'gene' => 'SLCO1B1',
            'allele' => '*5',
        ],

        // TPMT Proxy SNPs
        [
            'target' => 'rs1800460',      // TPMT*3B
            'proxy' => 'rs1142345',       // TPMT*3C (*3A = *3B+*3C)
            'r2' => 0.75,
            'population' => 'ALL',
            'phase_rule' => 'same',
            'gene' => 'TPMT',
            'allele' => '*3B',
        ],

        // DPYD Proxy SNPs
        [
            'target' => 'rs3918290',      // DPYD*2A (IVS14+1G>A)
            'proxy' => 'rs1801265',       // Nearby DPYD SNP
            'r2' => 0.78,
            'population' => 'EUR',
            'phase_rule' => 'same',
            'gene' => 'DPYD',
            'allele' => '*2A',
        ],
        [
            'target' => 'rs55886062',     // DPYD*13
            'proxy' => 'rs17376848',      // Tag SNP
            'r2' => 0.81,
            'population' => 'ALL',
            'phase_rule' => 'same',
            'gene' => 'DPYD',
            'allele' => '*13',
        ],

        // HLA-B Proxy SNPs (Tag SNP method)
        [
            'target' => 'rs2395029',      // HLA-B*57:01 tag
            'proxy' => 'rs2853525',       // MHC region tag SNP
            'r2' => 0.80,
            'population' => 'EUR',
            'phase_rule' => 'same',
            'gene' => 'HLA-B',
            'allele' => '*57:01',
        ],
    ];

    /**
     * DRUGS - Drug database (SSOT)
     *
     * Compliant with CPIC guidelines
     * - gene: Related gene
     * - category: Drug category
     * - cpic_level: CPIC evidence level
     */
    public const DRUGS = [
        // =====================================================
        // Opioid analgesics
        // =====================================================
        'codeine' => [
            'name' => ['ja' => 'コデイン', 'en' => 'Codeine'],
            'gene' => 'CYP2D6',
            'category' => 'opioid',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'tramadol' => [
            'name' => ['ja' => 'トラマドール', 'en' => 'Tramadol'],
            'gene' => 'CYP2D6',
            'category' => 'opioid',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'oxycodone' => [
            'name' => ['ja' => 'オキシコドン', 'en' => 'Oxycodone'],
            'gene' => 'CYP2D6',
            'category' => 'opioid',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'hydrocodone' => [
            'name' => ['ja' => 'ヒドロコドン', 'en' => 'Hydrocodone'],
            'gene' => 'CYP2D6',
            'category' => 'opioid',
            'cpic_level' => 'B',
            'prodrug' => true,
        ],
        'morphine' => [
            'name' => ['ja' => 'モルヒネ', 'en' => 'Morphine'],
            'gene' => ['UGT2B7', 'OPRM1'],
            'category' => 'opioid',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'fentanyl' => [
            'name' => ['ja' => 'フェンタニル', 'en' => 'Fentanyl'],
            'gene' => ['CYP3A4', 'OPRM1'],
            'category' => 'opioid',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'methadone' => [
            'name' => ['ja' => 'メサドン', 'en' => 'Methadone'],
            'gene' => ['CYP2B6', 'CYP3A4', 'OPRM1'],
            'category' => 'opioid',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'buprenorphine' => [
            'name' => ['ja' => 'ブプレノルフィン', 'en' => 'Buprenorphine'],
            'gene' => ['CYP3A4', 'OPRM1'],
            'category' => 'opioid',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // NSAIDs
        // =====================================================
        'celecoxib' => [
            'name' => ['ja' => 'セレコキシブ', 'en' => 'Celecoxib'],
            'gene' => 'CYP2C9',
            'category' => 'nsaid',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'ibuprofen' => [
            'name' => ['ja' => 'イブプロフェン', 'en' => 'Ibuprofen'],
            'gene' => 'CYP2C9',
            'category' => 'nsaid',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'flurbiprofen' => [
            'name' => ['ja' => 'フルルビプロフェン', 'en' => 'Flurbiprofen'],
            'gene' => 'CYP2C9',
            'category' => 'nsaid',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'piroxicam' => [
            'name' => ['ja' => 'ピロキシカム', 'en' => 'Piroxicam'],
            'gene' => 'CYP2C9',
            'category' => 'nsaid',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'meloxicam' => [
            'name' => ['ja' => 'メロキシカム', 'en' => 'Meloxicam'],
            'gene' => 'CYP2C9',
            'category' => 'nsaid',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'tenoxicam' => [
            'name' => ['ja' => 'テノキシカム', 'en' => 'Tenoxicam'],
            'gene' => 'CYP2C9',
            'category' => 'nsaid',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'lornoxicam' => [
            'name' => ['ja' => 'ロルノキシカム', 'en' => 'Lornoxicam'],
            'gene' => 'CYP2C9',
            'category' => 'nsaid',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // Antiplatelets and Anticoagulants
        // =====================================================
        'clopidogrel' => [
            'name' => ['ja' => 'クロピドグレル', 'en' => 'Clopidogrel'],
            'gene' => 'CYP2C19',
            'category' => 'antiplatelet',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'prasugrel' => [
            'name' => ['ja' => 'プラスグレル', 'en' => 'Prasugrel'],
            'gene' => 'CYP2C19',
            'category' => 'antiplatelet',
            'cpic_level' => 'B',
            'prodrug' => true,
        ],
        'ticagrelor' => [
            'name' => ['ja' => 'チカグレロル', 'en' => 'Ticagrelor'],
            'gene' => 'CYP3A4',
            'category' => 'antiplatelet',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'warfarin' => [
            'name' => ['ja' => 'ワルファリン', 'en' => 'Warfarin'],
            'gene' => ['CYP2C9', 'VKORC1', 'CYP4F2'],
            'category' => 'anticoagulant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'acenocoumarol' => [
            'name' => ['ja' => 'アセノクマロール', 'en' => 'Acenocoumarol'],
            'gene' => ['CYP2C9', 'VKORC1'],
            'category' => 'anticoagulant',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'phenprocoumon' => [
            'name' => ['ja' => 'フェンプロクモン', 'en' => 'Phenprocoumon'],
            'gene' => ['CYP2C9', 'VKORC1'],
            'category' => 'anticoagulant',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'dabigatran' => [
            'name' => ['ja' => 'ダビガトラン', 'en' => 'Dabigatran'],
            'gene' => 'ABCB1',
            'category' => 'anticoagulant',
            'cpic_level' => 'C',
            'prodrug' => true,
        ],
        'rivaroxaban' => [
            'name' => ['ja' => 'リバーロキサバン', 'en' => 'Rivaroxaban'],
            'gene' => ['CYP3A4', 'ABCB1'],
            'category' => 'anticoagulant',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'apixaban' => [
            'name' => ['ja' => 'アピキサバン', 'en' => 'Apixaban'],
            'gene' => ['CYP3A4', 'ABCB1'],
            'category' => 'anticoagulant',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'edoxaban' => [
            'name' => ['ja' => 'エドキサバン', 'en' => 'Edoxaban'],
            'gene' => 'ABCB1',
            'category' => 'anticoagulant',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // Statins (lipid-lowering drugs)
        // =====================================================
        'simvastatin' => [
            'name' => ['ja' => 'シンバスタチン', 'en' => 'Simvastatin'],
            'gene' => ['SLCO1B1', 'ABCG2'],
            'category' => 'statin',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'atorvastatin' => [
            'name' => ['ja' => 'アトルバスタチン', 'en' => 'Atorvastatin'],
            'gene' => ['SLCO1B1', 'ABCG2'],
            'category' => 'statin',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'rosuvastatin' => [
            'name' => ['ja' => 'ロスバスタチン', 'en' => 'Rosuvastatin'],
            'gene' => ['SLCO1B1', 'ABCG2'],
            'category' => 'statin',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'pravastatin' => [
            'name' => ['ja' => 'プラバスタチン', 'en' => 'Pravastatin'],
            'gene' => 'SLCO1B1',
            'category' => 'statin',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'fluvastatin' => [
            'name' => ['ja' => 'フルバスタチン', 'en' => 'Fluvastatin'],
            'gene' => 'CYP2C9',
            'category' => 'statin',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'lovastatin' => [
            'name' => ['ja' => 'ロバスタチン', 'en' => 'Lovastatin'],
            'gene' => ['SLCO1B1', 'CYP3A4'],
            'category' => 'statin',
            'cpic_level' => 'B',
            'prodrug' => true,
        ],
        'pitavastatin' => [
            'name' => ['ja' => 'ピタバスタチン', 'en' => 'Pitavastatin'],
            'gene' => 'SLCO1B1',
            'category' => 'statin',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],

        // =====================================================
        // Immunosuppressants and Thiopurines
        // =====================================================
        'azathioprine' => [
            'name' => ['ja' => 'アザチオプリン', 'en' => 'Azathioprine'],
            'gene' => ['TPMT', 'NUDT15'],
            'category' => 'immunosuppressant',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'mercaptopurine' => [
            'name' => ['ja' => 'メルカプトプリン', 'en' => 'Mercaptopurine'],
            'gene' => ['TPMT', 'NUDT15'],
            'category' => 'immunosuppressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'thioguanine' => [
            'name' => ['ja' => 'チオグアニン', 'en' => 'Thioguanine'],
            'gene' => ['TPMT', 'NUDT15'],
            'category' => 'immunosuppressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'tacrolimus' => [
            'name' => ['ja' => 'タクロリムス', 'en' => 'Tacrolimus'],
            'gene' => 'CYP3A5',
            'category' => 'immunosuppressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'cyclosporine' => [
            'name' => ['ja' => 'シクロスポリン', 'en' => 'Cyclosporine'],
            'gene' => ['CYP3A4', 'CYP3A5', 'ABCB1'],
            'category' => 'immunosuppressant',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'sirolimus' => [
            'name' => ['ja' => 'シロリムス', 'en' => 'Sirolimus'],
            'gene' => ['CYP3A4', 'CYP3A5'],
            'category' => 'immunosuppressant',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'everolimus' => [
            'name' => ['ja' => 'エベロリムス', 'en' => 'Everolimus'],
            'gene' => ['CYP3A4', 'CYP3A5'],
            'category' => 'immunosuppressant',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'mycophenolate' => [
            'name' => ['ja' => 'ミコフェノール酸', 'en' => 'Mycophenolate'],
            'gene' => 'UGT1A1',
            'category' => 'immunosuppressant',
            'cpic_level' => 'C',
            'prodrug' => true,
        ],

        // =====================================================
        // Anticancer drugs
        // =====================================================
        'fluorouracil' => [
            'name' => ['ja' => 'フルオロウラシル', 'en' => 'Fluorouracil (5-FU)'],
            'gene' => 'DPYD',
            'category' => 'antineoplastic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'capecitabine' => [
            'name' => ['ja' => 'カペシタビン', 'en' => 'Capecitabine'],
            'gene' => 'DPYD',
            'category' => 'antineoplastic',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'tegafur' => [
            'name' => ['ja' => 'テガフール', 'en' => 'Tegafur'],
            'gene' => ['DPYD', 'CYP2A6'],
            'category' => 'antineoplastic',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'irinotecan' => [
            'name' => ['ja' => 'イリノテカン', 'en' => 'Irinotecan'],
            'gene' => 'UGT1A1',
            'category' => 'antineoplastic',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'tamoxifen' => [
            'name' => ['ja' => 'タモキシフェン', 'en' => 'Tamoxifen'],
            'gene' => 'CYP2D6',
            'category' => 'antineoplastic',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'methotrexate' => [
            'name' => ['ja' => 'メトトレキサート', 'en' => 'Methotrexate'],
            'gene' => ['MTHFR', 'SLCO1B1'],
            'category' => 'antineoplastic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'cisplatin' => [
            'name' => ['ja' => 'シスプラチン', 'en' => 'Cisplatin'],
            'gene' => 'GSTP1',
            'category' => 'antineoplastic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'oxaliplatin' => [
            'name' => ['ja' => 'オキサリプラチン', 'en' => 'Oxaliplatin'],
            'gene' => 'GSTP1',
            'category' => 'antineoplastic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'carboplatin' => [
            'name' => ['ja' => 'カルボプラチン', 'en' => 'Carboplatin'],
            'gene' => 'GSTP1',
            'category' => 'antineoplastic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'paclitaxel' => [
            'name' => ['ja' => 'パクリタキセル', 'en' => 'Paclitaxel'],
            'gene' => ['CYP2C8', 'CYP3A4', 'ABCB1'],
            'category' => 'antineoplastic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'docetaxel' => [
            'name' => ['ja' => 'ドセタキセル', 'en' => 'Docetaxel'],
            'gene' => ['CYP3A4', 'CYP3A5', 'ABCB1'],
            'category' => 'antineoplastic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'vincristine' => [
            'name' => ['ja' => 'ビンクリスチン', 'en' => 'Vincristine'],
            'gene' => ['CYP3A4', 'CYP3A5'],
            'category' => 'antineoplastic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'vinblastine' => [
            'name' => ['ja' => 'ビンブラスチン', 'en' => 'Vinblastine'],
            'gene' => ['CYP3A4', 'CYP3A5'],
            'category' => 'antineoplastic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'imatinib' => [
            'name' => ['ja' => 'イマチニブ', 'en' => 'Imatinib'],
            'gene' => ['CYP3A4', 'ABCB1'],
            'category' => 'antineoplastic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'nilotinib' => [
            'name' => ['ja' => 'ニロチニブ', 'en' => 'Nilotinib'],
            'gene' => ['CYP3A4', 'UGT1A1'],
            'category' => 'antineoplastic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'gefitinib' => [
            'name' => ['ja' => 'ゲフィチニブ', 'en' => 'Gefitinib'],
            'gene' => 'CYP3A4',
            'category' => 'antineoplastic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'erlotinib' => [
            'name' => ['ja' => 'エルロチニブ', 'en' => 'Erlotinib'],
            'gene' => ['CYP3A4', 'CYP1A2'],
            'category' => 'antineoplastic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'sunitinib' => [
            'name' => ['ja' => 'スニチニブ', 'en' => 'Sunitinib'],
            'gene' => 'CYP3A4',
            'category' => 'antineoplastic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'sorafenib' => [
            'name' => ['ja' => 'ソラフェニブ', 'en' => 'Sorafenib'],
            'gene' => ['CYP3A4', 'UGT1A1'],
            'category' => 'antineoplastic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'cyclophosphamide' => [
            'name' => ['ja' => 'シクロホスファミド', 'en' => 'Cyclophosphamide'],
            'gene' => ['CYP2B6', 'CYP3A4', 'GSTP1'],
            'category' => 'antineoplastic',
            'cpic_level' => 'C',
            'prodrug' => true,
        ],
        'ifosfamide' => [
            'name' => ['ja' => 'イホスファミド', 'en' => 'Ifosfamide'],
            'gene' => ['CYP2B6', 'CYP3A4'],
            'category' => 'antineoplastic',
            'cpic_level' => 'C',
            'prodrug' => true,
        ],

        // =====================================================
        // Anti-HIV and Antiviral drugs
        // =====================================================
        'abacavir' => [
            'name' => ['ja' => 'アバカビル', 'en' => 'Abacavir'],
            'gene' => 'HLA-B',
            'category' => 'antiretroviral',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'efavirenz' => [
            'name' => ['ja' => 'エファビレンツ', 'en' => 'Efavirenz'],
            'gene' => 'CYP2B6',
            'category' => 'antiretroviral',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'nevirapine' => [
            'name' => ['ja' => 'ネビラピン', 'en' => 'Nevirapine'],
            'gene' => ['CYP2B6', 'HLA-B'],
            'category' => 'antiretroviral',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'atazanavir' => [
            'name' => ['ja' => 'アタザナビル', 'en' => 'Atazanavir'],
            'gene' => 'UGT1A1',
            'category' => 'antiretroviral',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'lopinavir' => [
            'name' => ['ja' => 'ロピナビル', 'en' => 'Lopinavir'],
            'gene' => 'CYP3A4',
            'category' => 'antiretroviral',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'ritonavir' => [
            'name' => ['ja' => 'リトナビル', 'en' => 'Ritonavir'],
            'gene' => 'CYP3A4',
            'category' => 'antiretroviral',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'ribavirin' => [
            'name' => ['ja' => 'リバビリン', 'en' => 'Ribavirin'],
            'gene' => 'ITPA',
            'category' => 'antiviral',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'peginterferon' => [
            'name' => ['ja' => 'ペグインターフェロン', 'en' => 'Peginterferon'],
            'gene' => 'IL28B',
            'category' => 'antiviral',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'voriconazole' => [
            'name' => ['ja' => 'ボリコナゾール', 'en' => 'Voriconazole'],
            'gene' => 'CYP2C19',
            'category' => 'antifungal',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],

        // =====================================================
        // Antiepileptic drugs
        // =====================================================
        'carbamazepine' => [
            'name' => ['ja' => 'カルバマゼピン', 'en' => 'Carbamazepine'],
            'gene' => ['HLA-B', 'HLA-A'],
            'category' => 'antiepileptic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'oxcarbazepine' => [
            'name' => ['ja' => 'オクスカルバゼピン', 'en' => 'Oxcarbazepine'],
            'gene' => ['HLA-B', 'HLA-A'],
            'category' => 'antiepileptic',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'phenytoin' => [
            'name' => ['ja' => 'フェニトイン', 'en' => 'Phenytoin'],
            'gene' => ['CYP2C9', 'HLA-B'],
            'category' => 'antiepileptic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'fosphenytoin' => [
            'name' => ['ja' => 'ホスフェニトイン', 'en' => 'Fosphenytoin'],
            'gene' => ['CYP2C9', 'HLA-B'],
            'category' => 'antiepileptic',
            'cpic_level' => 'A',
            'prodrug' => true,
        ],
        'lamotrigine' => [
            'name' => ['ja' => 'ラモトリギン', 'en' => 'Lamotrigine'],
            'gene' => ['HLA-B', 'UGT1A4'],
            'category' => 'antiepileptic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'phenobarbital' => [
            'name' => ['ja' => 'フェノバルビタール', 'en' => 'Phenobarbital'],
            'gene' => 'HLA-B',
            'category' => 'antiepileptic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'valproic_acid' => [
            'name' => ['ja' => 'バルプロ酸', 'en' => 'Valproic Acid'],
            'gene' => 'UGT2B7',
            'category' => 'antiepileptic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'levetiracetam' => [
            'name' => ['ja' => 'レベチラセタム', 'en' => 'Levetiracetam'],
            'gene' => 'ABCB1',
            'category' => 'antiepileptic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'clobazam' => [
            'name' => ['ja' => 'クロバザム', 'en' => 'Clobazam'],
            'gene' => 'CYP2C19',
            'category' => 'antiepileptic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'brivaracetam' => [
            'name' => ['ja' => 'ブリバラセタム', 'en' => 'Brivaracetam'],
            'gene' => 'CYP2C19',
            'category' => 'antiepileptic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // PPIs (Proton Pump Inhibitors)
        // =====================================================
        'omeprazole' => [
            'name' => ['ja' => 'オメプラゾール', 'en' => 'Omeprazole'],
            'gene' => 'CYP2C19',
            'category' => 'ppi',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'lansoprazole' => [
            'name' => ['ja' => 'ランソプラゾール', 'en' => 'Lansoprazole'],
            'gene' => 'CYP2C19',
            'category' => 'ppi',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'esomeprazole' => [
            'name' => ['ja' => 'エソメプラゾール', 'en' => 'Esomeprazole'],
            'gene' => 'CYP2C19',
            'category' => 'ppi',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'pantoprazole' => [
            'name' => ['ja' => 'パントプラゾール', 'en' => 'Pantoprazole'],
            'gene' => 'CYP2C19',
            'category' => 'ppi',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'rabeprazole' => [
            'name' => ['ja' => 'ラベプラゾール', 'en' => 'Rabeprazole'],
            'gene' => 'CYP2C19',
            'category' => 'ppi',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'dexlansoprazole' => [
            'name' => ['ja' => 'デクスランソプラゾール', 'en' => 'Dexlansoprazole'],
            'gene' => 'CYP2C19',
            'category' => 'ppi',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'vonoprazan' => [
            'name' => ['ja' => 'ボノプラザン', 'en' => 'Vonoprazan'],
            'gene' => 'CYP3A4',
            'category' => 'ppi',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // Antidepressants
        // =====================================================
        'amitriptyline' => [
            'name' => ['ja' => 'アミトリプチリン', 'en' => 'Amitriptyline'],
            'gene' => ['CYP2D6', 'CYP2C19'],
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'nortriptyline' => [
            'name' => ['ja' => 'ノルトリプチリン', 'en' => 'Nortriptyline'],
            'gene' => 'CYP2D6',
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'imipramine' => [
            'name' => ['ja' => 'イミプラミン', 'en' => 'Imipramine'],
            'gene' => ['CYP2D6', 'CYP2C19'],
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'desipramine' => [
            'name' => ['ja' => 'デシプラミン', 'en' => 'Desipramine'],
            'gene' => 'CYP2D6',
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'clomipramine' => [
            'name' => ['ja' => 'クロミプラミン', 'en' => 'Clomipramine'],
            'gene' => ['CYP2D6', 'CYP2C19'],
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'doxepin' => [
            'name' => ['ja' => 'ドキセピン', 'en' => 'Doxepin'],
            'gene' => ['CYP2D6', 'CYP2C19'],
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'trimipramine' => [
            'name' => ['ja' => 'トリミプラミン', 'en' => 'Trimipramine'],
            'gene' => ['CYP2D6', 'CYP2C19'],
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'sertraline' => [
            'name' => ['ja' => 'セルトラリン', 'en' => 'Sertraline'],
            'gene' => 'CYP2C19',
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'escitalopram' => [
            'name' => ['ja' => 'エスシタロプラム', 'en' => 'Escitalopram'],
            'gene' => 'CYP2C19',
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'citalopram' => [
            'name' => ['ja' => 'シタロプラム', 'en' => 'Citalopram'],
            'gene' => 'CYP2C19',
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'fluvoxamine' => [
            'name' => ['ja' => 'フルボキサミン', 'en' => 'Fluvoxamine'],
            'gene' => 'CYP2D6',
            'category' => 'antidepressant',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'paroxetine' => [
            'name' => ['ja' => 'パロキセチン', 'en' => 'Paroxetine'],
            'gene' => 'CYP2D6',
            'category' => 'antidepressant',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'fluoxetine' => [
            'name' => ['ja' => 'フルオキセチン', 'en' => 'Fluoxetine'],
            'gene' => 'CYP2D6',
            'category' => 'antidepressant',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'venlafaxine' => [
            'name' => ['ja' => 'ベンラファキシン', 'en' => 'Venlafaxine'],
            'gene' => 'CYP2D6',
            'category' => 'antidepressant',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'duloxetine' => [
            'name' => ['ja' => 'デュロキセチン', 'en' => 'Duloxetine'],
            'gene' => 'CYP2D6',
            'category' => 'antidepressant',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'mirtazapine' => [
            'name' => ['ja' => 'ミルタザピン', 'en' => 'Mirtazapine'],
            'gene' => ['CYP2D6', 'CYP1A2', 'CYP3A4'],
            'category' => 'antidepressant',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'bupropion' => [
            'name' => ['ja' => 'ブプロピオン', 'en' => 'Bupropion'],
            'gene' => 'CYP2B6',
            'category' => 'antidepressant',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'trazodone' => [
            'name' => ['ja' => 'トラゾドン', 'en' => 'Trazodone'],
            'gene' => 'CYP3A4',
            'category' => 'antidepressant',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // Antipsychotics
        // =====================================================
        'haloperidol' => [
            'name' => ['ja' => 'ハロペリドール', 'en' => 'Haloperidol'],
            'gene' => ['CYP2D6', 'CYP3A4'],
            'category' => 'antipsychotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'risperidone' => [
            'name' => ['ja' => 'リスペリドン', 'en' => 'Risperidone'],
            'gene' => 'CYP2D6',
            'category' => 'antipsychotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'paliperidone' => [
            'name' => ['ja' => 'パリペリドン', 'en' => 'Paliperidone'],
            'gene' => 'CYP2D6',
            'category' => 'antipsychotic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'aripiprazole' => [
            'name' => ['ja' => 'アリピプラゾール', 'en' => 'Aripiprazole'],
            'gene' => ['CYP2D6', 'CYP3A4'],
            'category' => 'antipsychotic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'brexpiprazole' => [
            'name' => ['ja' => 'ブレクスピプラゾール', 'en' => 'Brexpiprazole'],
            'gene' => ['CYP2D6', 'CYP3A4'],
            'category' => 'antipsychotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'olanzapine' => [
            'name' => ['ja' => 'オランザピン', 'en' => 'Olanzapine'],
            'gene' => ['CYP1A2', 'HTR2C'],
            'category' => 'antipsychotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'clozapine' => [
            'name' => ['ja' => 'クロザピン', 'en' => 'Clozapine'],
            'gene' => ['CYP1A2', 'CYP2D6', 'HTR2C'],
            'category' => 'antipsychotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'quetiapine' => [
            'name' => ['ja' => 'クエチアピン', 'en' => 'Quetiapine'],
            'gene' => 'CYP3A4',
            'category' => 'antipsychotic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'ziprasidone' => [
            'name' => ['ja' => 'ジプラシドン', 'en' => 'Ziprasidone'],
            'gene' => ['CYP3A4', 'CYP1A2'],
            'category' => 'antipsychotic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'iloperidone' => [
            'name' => ['ja' => 'イロペリドン', 'en' => 'Iloperidone'],
            'gene' => ['CYP2D6', 'CYP3A4'],
            'category' => 'antipsychotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'pimozide' => [
            'name' => ['ja' => 'ピモジド', 'en' => 'Pimozide'],
            'gene' => ['CYP2D6', 'CYP3A4'],
            'category' => 'antipsychotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'perphenazine' => [
            'name' => ['ja' => 'ペルフェナジン', 'en' => 'Perphenazine'],
            'gene' => 'CYP2D6',
            'category' => 'antipsychotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'thioridazine' => [
            'name' => ['ja' => 'チオリダジン', 'en' => 'Thioridazine'],
            'gene' => 'CYP2D6',
            'category' => 'antipsychotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'zuclopenthixol' => [
            'name' => ['ja' => 'ズクロペンチキソール', 'en' => 'Zuclopenthixol'],
            'gene' => 'CYP2D6',
            'category' => 'antipsychotic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // Anxiolytics and Sleep medications
        // =====================================================
        'diazepam' => [
            'name' => ['ja' => 'ジアゼパム', 'en' => 'Diazepam'],
            'gene' => ['CYP2C19', 'CYP3A4'],
            'category' => 'anxiolytic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'alprazolam' => [
            'name' => ['ja' => 'アルプラゾラム', 'en' => 'Alprazolam'],
            'gene' => 'CYP3A4',
            'category' => 'anxiolytic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'lorazepam' => [
            'name' => ['ja' => 'ロラゼパム', 'en' => 'Lorazepam'],
            'gene' => 'UGT2B15',
            'category' => 'anxiolytic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'midazolam' => [
            'name' => ['ja' => 'ミダゾラム', 'en' => 'Midazolam'],
            'gene' => 'CYP3A4',
            'category' => 'anxiolytic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'triazolam' => [
            'name' => ['ja' => 'トリアゾラム', 'en' => 'Triazolam'],
            'gene' => 'CYP3A4',
            'category' => 'hypnotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'zolpidem' => [
            'name' => ['ja' => 'ゾルピデム', 'en' => 'Zolpidem'],
            'gene' => ['CYP3A4', 'CYP1A2'],
            'category' => 'hypnotic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // Cardiovascular drugs
        // =====================================================
        'metoprolol' => [
            'name' => ['ja' => 'メトプロロール', 'en' => 'Metoprolol'],
            'gene' => ['CYP2D6', 'ADRB1'],
            'category' => 'cardiovascular',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'carvedilol' => [
            'name' => ['ja' => 'カルベジロール', 'en' => 'Carvedilol'],
            'gene' => ['CYP2D6', 'ADRB1'],
            'category' => 'cardiovascular',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'propranolol' => [
            'name' => ['ja' => 'プロプラノロール', 'en' => 'Propranolol'],
            'gene' => ['CYP2D6', 'CYP1A2'],
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'timolol' => [
            'name' => ['ja' => 'チモロール', 'en' => 'Timolol'],
            'gene' => 'CYP2D6',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'nebivolol' => [
            'name' => ['ja' => 'ネビボロール', 'en' => 'Nebivolol'],
            'gene' => 'CYP2D6',
            'category' => 'cardiovascular',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'flecainide' => [
            'name' => ['ja' => 'フレカイニド', 'en' => 'Flecainide'],
            'gene' => 'CYP2D6',
            'category' => 'cardiovascular',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'propafenone' => [
            'name' => ['ja' => 'プロパフェノン', 'en' => 'Propafenone'],
            'gene' => 'CYP2D6',
            'category' => 'cardiovascular',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'mexiletine' => [
            'name' => ['ja' => 'メキシレチン', 'en' => 'Mexiletine'],
            'gene' => 'CYP2D6',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'amiodarone' => [
            'name' => ['ja' => 'アミオダロン', 'en' => 'Amiodarone'],
            'gene' => ['CYP3A4', 'CYP2C8'],
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'dronedarone' => [
            'name' => ['ja' => 'ドロネダロン', 'en' => 'Dronedarone'],
            'gene' => 'CYP3A4',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'digoxin' => [
            'name' => ['ja' => 'ジゴキシン', 'en' => 'Digoxin'],
            'gene' => 'ABCB1',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'losartan' => [
            'name' => ['ja' => 'ロサルタン', 'en' => 'Losartan'],
            'gene' => 'CYP2C9',
            'category' => 'cardiovascular',
            'cpic_level' => 'B',
            'prodrug' => true,
        ],
        'irbesartan' => [
            'name' => ['ja' => 'イルベサルタン', 'en' => 'Irbesartan'],
            'gene' => 'CYP2C9',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'captopril' => [
            'name' => ['ja' => 'カプトプリル', 'en' => 'Captopril'],
            'gene' => 'ACE',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'enalapril' => [
            'name' => ['ja' => 'エナラプリル', 'en' => 'Enalapril'],
            'gene' => 'ACE',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => true,
        ],
        'lisinopril' => [
            'name' => ['ja' => 'リシノプリル', 'en' => 'Lisinopril'],
            'gene' => 'ACE',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'amlodipine' => [
            'name' => ['ja' => 'アムロジピン', 'en' => 'Amlodipine'],
            'gene' => 'CYP3A4',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'nifedipine' => [
            'name' => ['ja' => 'ニフェジピン', 'en' => 'Nifedipine'],
            'gene' => 'CYP3A4',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'diltiazem' => [
            'name' => ['ja' => 'ジルチアゼム', 'en' => 'Diltiazem'],
            'gene' => 'CYP3A4',
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'verapamil' => [
            'name' => ['ja' => 'ベラパミル', 'en' => 'Verapamil'],
            'gene' => ['CYP3A4', 'ABCB1'],
            'category' => 'cardiovascular',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // Diabetes medications
        // =====================================================
        'metformin' => [
            'name' => ['ja' => 'メトホルミン', 'en' => 'Metformin'],
            'gene' => ['SLC22A1', 'SLC47A1'],
            'category' => 'antidiabetic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'glimepiride' => [
            'name' => ['ja' => 'グリメピリド', 'en' => 'Glimepiride'],
            'gene' => ['CYP2C9', 'KCNJ11'],
            'category' => 'antidiabetic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'gliclazide' => [
            'name' => ['ja' => 'グリクラジド', 'en' => 'Gliclazide'],
            'gene' => 'CYP2C9',
            'category' => 'antidiabetic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'glipizide' => [
            'name' => ['ja' => 'グリピジド', 'en' => 'Glipizide'],
            'gene' => 'CYP2C9',
            'category' => 'antidiabetic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'glyburide' => [
            'name' => ['ja' => 'グリブリド', 'en' => 'Glyburide'],
            'gene' => 'CYP2C9',
            'category' => 'antidiabetic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'tolbutamide' => [
            'name' => ['ja' => 'トルブタミド', 'en' => 'Tolbutamide'],
            'gene' => 'CYP2C9',
            'category' => 'antidiabetic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'nateglinide' => [
            'name' => ['ja' => 'ナテグリニド', 'en' => 'Nateglinide'],
            'gene' => 'CYP2C9',
            'category' => 'antidiabetic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'pioglitazone' => [
            'name' => ['ja' => 'ピオグリタゾン', 'en' => 'Pioglitazone'],
            'gene' => ['CYP2C8', 'PPARG'],
            'category' => 'antidiabetic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'rosiglitazone' => [
            'name' => ['ja' => 'ロシグリタゾン', 'en' => 'Rosiglitazone'],
            'gene' => ['CYP2C8', 'PPARG'],
            'category' => 'antidiabetic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // Anti-infective drugs
        // =====================================================
        'isoniazid' => [
            'name' => ['ja' => 'イソニアジド', 'en' => 'Isoniazid'],
            'gene' => 'NAT2',
            'category' => 'antibiotic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'sulfasalazine' => [
            'name' => ['ja' => 'スルファサラジン', 'en' => 'Sulfasalazine'],
            'gene' => 'NAT2',
            'category' => 'antibiotic',
            'cpic_level' => 'B',
            'prodrug' => true,
        ],
        'dapsone' => [
            'name' => ['ja' => 'ダプソン', 'en' => 'Dapsone'],
            'gene' => ['G6PD', 'HLA-B'],
            'category' => 'antibiotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'primaquine' => [
            'name' => ['ja' => 'プリマキン', 'en' => 'Primaquine'],
            'gene' => 'G6PD',
            'category' => 'antimalarial',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'rasburicase' => [
            'name' => ['ja' => 'ラスブリカーゼ', 'en' => 'Rasburicase'],
            'gene' => 'G6PD',
            'category' => 'antibiotic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'chloroquine' => [
            'name' => ['ja' => 'クロロキン', 'en' => 'Chloroquine'],
            'gene' => 'G6PD',
            'category' => 'antimalarial',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'hydroxychloroquine' => [
            'name' => ['ja' => 'ヒドロキシクロロキン', 'en' => 'Hydroxychloroquine'],
            'gene' => 'G6PD',
            'category' => 'antimalarial',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'nitrofurantoin' => [
            'name' => ['ja' => 'ニトロフラントイン', 'en' => 'Nitrofurantoin'],
            'gene' => 'G6PD',
            'category' => 'antibiotic',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'gentamicin' => [
            'name' => ['ja' => 'ゲンタマイシン', 'en' => 'Gentamicin'],
            'gene' => 'MT-RNR1',
            'category' => 'antibiotic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'amikacin' => [
            'name' => ['ja' => 'アミカシン', 'en' => 'Amikacin'],
            'gene' => 'MT-RNR1',
            'category' => 'antibiotic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'tobramycin' => [
            'name' => ['ja' => 'トブラマイシン', 'en' => 'Tobramycin'],
            'gene' => 'MT-RNR1',
            'category' => 'antibiotic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'streptomycin' => [
            'name' => ['ja' => 'ストレプトマイシン', 'en' => 'Streptomycin'],
            'gene' => 'MT-RNR1',
            'category' => 'antibiotic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'kanamycin' => [
            'name' => ['ja' => 'カナマイシン', 'en' => 'Kanamycin'],
            'gene' => 'MT-RNR1',
            'category' => 'antibiotic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'erythromycin' => [
            'name' => ['ja' => 'エリスロマイシン', 'en' => 'Erythromycin'],
            'gene' => 'CYP3A4',
            'category' => 'antibiotic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'clarithromycin' => [
            'name' => ['ja' => 'クラリスロマイシン', 'en' => 'Clarithromycin'],
            'gene' => 'CYP3A4',
            'category' => 'antibiotic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'azithromycin' => [
            'name' => ['ja' => 'アジスロマイシン', 'en' => 'Azithromycin'],
            'gene' => 'ABCB1',
            'category' => 'antibiotic',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // Anesthetics
        // =====================================================
        'succinylcholine' => [
            'name' => ['ja' => 'スキサメトニウム', 'en' => 'Succinylcholine'],
            'gene' => 'RYR1',
            'category' => 'anesthetic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'sevoflurane' => [
            'name' => ['ja' => 'セボフルラン', 'en' => 'Sevoflurane'],
            'gene' => 'RYR1',
            'category' => 'anesthetic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'desflurane' => [
            'name' => ['ja' => 'デスフルラン', 'en' => 'Desflurane'],
            'gene' => 'RYR1',
            'category' => 'anesthetic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'isoflurane' => [
            'name' => ['ja' => 'イソフルラン', 'en' => 'Isoflurane'],
            'gene' => 'RYR1',
            'category' => 'anesthetic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'halothane' => [
            'name' => ['ja' => 'ハロタン', 'en' => 'Halothane'],
            'gene' => 'RYR1',
            'category' => 'anesthetic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],

        // =====================================================
        // Gout medications
        // =====================================================
        'allopurinol' => [
            'name' => ['ja' => 'アロプリノール', 'en' => 'Allopurinol'],
            'gene' => 'HLA-B',
            'category' => 'antigout',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'febuxostat' => [
            'name' => ['ja' => 'フェブキソスタット', 'en' => 'Febuxostat'],
            'gene' => 'UGT1A1',
            'category' => 'antigout',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'probenecid' => [
            'name' => ['ja' => 'プロベネシド', 'en' => 'Probenecid'],
            'gene' => 'ABCG2',
            'category' => 'antigout',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'colchicine' => [
            'name' => ['ja' => 'コルヒチン', 'en' => 'Colchicine'],
            'gene' => ['CYP3A4', 'ABCB1'],
            'category' => 'antigout',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],

        // =====================================================
        // Hormone-related
        // =====================================================
        'letrozole' => [
            'name' => ['ja' => 'レトロゾール', 'en' => 'Letrozole'],
            'gene' => 'CYP19A1',
            'category' => 'hormone',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'anastrozole' => [
            'name' => ['ja' => 'アナストロゾール', 'en' => 'Anastrozole'],
            'gene' => 'CYP19A1',
            'category' => 'hormone',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'exemestane' => [
            'name' => ['ja' => 'エキセメスタン', 'en' => 'Exemestane'],
            'gene' => 'CYP19A1',
            'category' => 'hormone',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],

        // =====================================================
        // ADHD medications
        // =====================================================
        'atomoxetine' => [
            'name' => ['ja' => 'アトモキセチン', 'en' => 'Atomoxetine'],
            'gene' => 'CYP2D6',
            'category' => 'adhd',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'methylphenidate' => [
            'name' => ['ja' => 'メチルフェニデート', 'en' => 'Methylphenidate'],
            'gene' => 'CES1',
            'category' => 'adhd',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'amphetamine' => [
            'name' => ['ja' => 'アンフェタミン', 'en' => 'Amphetamine'],
            'gene' => 'CYP2D6',
            'category' => 'adhd',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'lisdexamfetamine' => [
            'name' => ['ja' => 'リスデキサンフェタミン', 'en' => 'Lisdexamfetamine'],
            'gene' => 'CYP2D6',
            'category' => 'adhd',
            'cpic_level' => 'C',
            'prodrug' => true,
        ],

        // =====================================================
        // Cough and Cold medications
        // =====================================================
        'dextromethorphan' => [
            'name' => ['ja' => 'デキストロメトルファン', 'en' => 'Dextromethorphan'],
            'gene' => 'CYP2D6',
            'category' => 'antitussive',
            'cpic_level' => 'B',
            'prodrug' => true,
        ],

        // =====================================================
        // Respiratory medications
        // =====================================================
        'theophylline' => [
            'name' => ['ja' => 'テオフィリン', 'en' => 'Theophylline'],
            'gene' => 'CYP1A2',
            'category' => 'respiratory',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'salbutamol' => [
            'name' => ['ja' => 'サルブタモール', 'en' => 'Salbutamol (Albuterol)'],
            'gene' => 'ADRB2',
            'category' => 'respiratory',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'salmeterol' => [
            'name' => ['ja' => 'サルメテロール', 'en' => 'Salmeterol'],
            'gene' => 'ADRB2',
            'category' => 'respiratory',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
        'formoterol' => [
            'name' => ['ja' => 'ホルモテロール', 'en' => 'Formoterol'],
            'gene' => 'ADRB2',
            'category' => 'respiratory',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],

        // =====================================================
        // G6PD-related drugs (oxidative stress-induced hemolysis risk)
        // =====================================================
        'primaquine' => [
            'name' => ['ja' => 'プリマキン', 'en' => 'Primaquine'],
            'gene' => 'G6PD',
            'category' => 'antimalarial',
            'cpic_level' => 'A',
            'prodrug' => false,
            'g6pd_risk' => 'high',
        ],
        'dapsone' => [
            'name' => ['ja' => 'ダプソン', 'en' => 'Dapsone'],
            'gene' => ['G6PD', 'HLA-B'],
            'category' => 'antibiotic',
            'cpic_level' => 'A',
            'prodrug' => false,
            'g6pd_risk' => 'high',
        ],
        'methylene_blue' => [
            'name' => ['ja' => 'メチレンブルー', 'en' => 'Methylene Blue'],
            'gene' => 'G6PD',
            'category' => 'antidote',
            'cpic_level' => 'A',
            'prodrug' => false,
            'g6pd_risk' => 'high',
        ],
        'nitrofurantoin' => [
            'name' => ['ja' => 'ニトロフラントイン', 'en' => 'Nitrofurantoin'],
            'gene' => 'G6PD',
            'category' => 'antibiotic',
            'cpic_level' => 'A',
            'prodrug' => false,
            'g6pd_risk' => 'high',
        ],
        'rasburicase' => [
            'name' => ['ja' => 'ラスブリカーゼ', 'en' => 'Rasburicase'],
            'gene' => 'G6PD',
            'category' => 'antihyperuricemic',
            'cpic_level' => 'A',
            'prodrug' => false,
            'g6pd_risk' => 'high',
        ],
        'pegloticase' => [
            'name' => ['ja' => 'ペグロチカーゼ', 'en' => 'Pegloticase'],
            'gene' => 'G6PD',
            'category' => 'antihyperuricemic',
            'cpic_level' => 'A',
            'prodrug' => false,
            'g6pd_risk' => 'high',
        ],
        'sulfamethoxazole' => [
            'name' => ['ja' => 'スルファメトキサゾール', 'en' => 'Sulfamethoxazole'],
            'gene' => 'G6PD',
            'category' => 'antibiotic',
            'cpic_level' => 'B',
            'prodrug' => false,
            'g6pd_risk' => 'moderate',
        ],
        'chloroquine' => [
            'name' => ['ja' => 'クロロキン', 'en' => 'Chloroquine'],
            'gene' => 'G6PD',
            'category' => 'antimalarial',
            'cpic_level' => 'B',
            'prodrug' => false,
            'g6pd_risk' => 'moderate',
        ],
        'quinine' => [
            'name' => ['ja' => 'キニーネ', 'en' => 'Quinine'],
            'gene' => 'G6PD',
            'category' => 'antimalarial',
            'cpic_level' => 'B',
            'prodrug' => false,
            'g6pd_risk' => 'moderate',
        ],

        // =====================================================
        // Others
        // =====================================================
        'caffeine' => [
            'name' => ['ja' => 'カフェイン', 'en' => 'Caffeine'],
            'gene' => 'CYP1A2',
            'category' => 'stimulant',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'nicotine' => [
            'name' => ['ja' => 'ニコチン', 'en' => 'Nicotine'],
            'gene' => 'CYP2A6',
            'category' => 'other',
            'cpic_level' => 'C',
            'prodrug' => false,
        ],
        'ondansetron' => [
            'name' => ['ja' => 'オンダンセトロン', 'en' => 'Ondansetron'],
            'gene' => ['CYP2D6', 'CYP3A4'],
            'category' => 'antiemetic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'tropisetron' => [
            'name' => ['ja' => 'トロピセトロン', 'en' => 'Tropisetron'],
            'gene' => 'CYP2D6',
            'category' => 'antiemetic',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'eliglustat' => [
            'name' => ['ja' => 'エリグルスタット', 'en' => 'Eliglustat'],
            'gene' => 'CYP2D6',
            'category' => 'other',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'siponimod' => [
            'name' => ['ja' => 'シポニモド', 'en' => 'Siponimod'],
            'gene' => 'CYP2C9',
            'category' => 'other',
            'cpic_level' => 'A',
            'prodrug' => false,
        ],
        'pitolisant' => [
            'name' => ['ja' => 'ピトリサント', 'en' => 'Pitolisant'],
            'gene' => 'CYP2D6',
            'category' => 'other',
            'cpic_level' => 'B',
            'prodrug' => false,
        ],
    ];

    /**
     * RECOMMENDATIONS - Genotype-based medication recommendations (SSOT)
     *
     * Compliant with CPIC guidelines
     * action: Recommended action
     *   - 'avoid': Contraindicated
     *   - 'reduce': Dose reduction
     *   - 'increase': Dose increase
     *   - 'alternative': Alternative drug recommended
     *   - 'standard': Standard dose
     *   - 'monitor': Monitor closely
     */
    public const RECOMMENDATIONS = [
        // =====================================================
        // CYP2D6-related drugs
        // =====================================================
        'codeine' => [
            'UM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '致死的な呼吸抑制リスク', 'en' => 'Risk of fatal respiratory depression'],
                'alternative' => ['ja' => 'モルヒネ以外の鎮痛薬', 'en' => 'Non-morphine analgesics'],
            ],
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '効果なし（モルヒネへ変換されない）', 'en' => 'No effect (not converted to morphine)'],
                'alternative' => ['ja' => 'モルヒネ、オキシコドン', 'en' => 'Morphine, oxycodone'],
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '効果減弱の可能性', 'en' => 'Possibly reduced effect'],
                'dose_adjustment' => 0.75,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'tramadol' => [
            'UM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '毒性リスク増加', 'en' => 'Increased toxicity risk'],
                'alternative' => ['ja' => '非オピオイド鎮痛薬', 'en' => 'Non-opioid analgesics'],
            ],
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '効果なし', 'en' => 'No effect'],
                'alternative' => ['ja' => '他の鎮痛薬', 'en' => 'Alternative analgesics'],
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'dose_adjustment' => 0.75,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'hydrocodone' => [
            'UM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '毒性リスク増加', 'en' => 'Increased toxicity risk'],
                'alternative' => ['ja' => '非CYP2D6依存性鎮痛薬', 'en' => 'Non-CYP2D6 dependent analgesics'],
            ],
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'alternative' => ['ja' => 'モルヒネ', 'en' => 'Morphine'],
            ],
            'NM' => ['action' => 'standard'],
        ],
        'tamoxifen' => [
            'UM' => ['action' => 'standard'],
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => 'エンドキシフェン濃度低下で効果減弱', 'en' => 'Reduced endoxifen levels, decreased efficacy'],
                'alternative' => ['ja' => 'アロマターゼ阻害薬', 'en' => 'Aromatase inhibitors'],
            ],
            'IM' => [
                'action' => 'alternative',
                'reason' => ['ja' => '効果減弱の可能性', 'en' => 'Possibly reduced efficacy'],
                'alternative' => ['ja' => 'アロマターゼ阻害薬を検討', 'en' => 'Consider aromatase inhibitors'],
            ],
            'NM' => ['action' => 'standard'],
        ],
        'ondansetron' => [
            'UM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'alternative' => ['ja' => 'グラニセトロン', 'en' => 'Granisetron'],
            ],
            'PM' => [
                'action' => 'monitor',
                'reason' => ['ja' => 'QT延長リスク', 'en' => 'QT prolongation risk'],
            ],
            'NM' => ['action' => 'standard'],
        ],
        'aripiprazole' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '血中濃度上昇', 'en' => 'Increased plasma concentration'],
                'dose_adjustment' => 0.5,
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '血中濃度やや上昇', 'en' => 'Slightly increased concentration'],
                'dose_adjustment' => 0.75,
            ],
            'NM' => ['action' => 'standard'],
            'UM' => ['action' => 'standard'],
        ],
        'atomoxetine' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '血中濃度大幅上昇', 'en' => 'Significantly increased concentration'],
                'dose_adjustment' => 0.25,
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '血中濃度上昇', 'en' => 'Increased concentration'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
            'UM' => ['action' => 'standard'],
        ],
        'eliglustat' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '血中濃度大幅上昇', 'en' => 'Significantly increased concentration'],
                'max_dose' => '42mg bid',
            ],
            'IM' => [
                'action' => 'standard',
                'reason' => ['ja' => '標準用量で使用可', 'en' => 'Standard dose appropriate'],
            ],
            'NM' => ['action' => 'standard'],
            'UM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '効果不十分の可能性', 'en' => 'May have inadequate effect'],
            ],
        ],
        'nortriptyline' => [
            'UM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '効果不十分', 'en' => 'Inadequate effect expected'],
                'alternative' => ['ja' => '他の抗うつ薬', 'en' => 'Alternative antidepressant'],
            ],
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '副作用リスク増加', 'en' => 'Increased adverse effect risk'],
                'dose_adjustment' => 0.5,
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '副作用リスク', 'en' => 'Adverse effect risk'],
                'dose_adjustment' => 0.75,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'amitriptyline' => [
            'UM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '効果不十分', 'en' => 'Inadequate effect expected'],
                'alternative' => ['ja' => '他の抗うつ薬', 'en' => 'Alternative antidepressant'],
            ],
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '副作用リスク増加', 'en' => 'Increased adverse effect risk'],
                'dose_adjustment' => 0.5,
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '副作用リスク', 'en' => 'Adverse effect risk'],
                'dose_adjustment' => 0.75,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'paroxetine' => [
            'UM' => [
                'action' => 'monitor',
                'reason' => ['ja' => '効果減弱の可能性', 'en' => 'Possibly reduced effect'],
            ],
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '副作用リスク', 'en' => 'Adverse effect risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'fluvoxamine' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '血中濃度上昇', 'en' => 'Increased concentration'],
                'dose_adjustment' => 0.75,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'risperidone' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '副作用リスク増加', 'en' => 'Increased adverse effect risk'],
                'dose_adjustment' => 0.5,
            ],
            'UM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱の可能性', 'en' => 'Possibly reduced effect'],
                'dose_adjustment' => 1.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'haloperidol' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '錐体外路症状リスク', 'en' => 'Extrapyramidal symptom risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'metoprolol' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '徐脈・低血圧リスク', 'en' => 'Bradycardia/hypotension risk'],
                'dose_adjustment' => 0.75,
                'alternative' => ['ja' => 'ビソプロロール、アテノロール', 'en' => 'Bisoprolol, atenolol'],
            ],
            'UM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'alternative' => ['ja' => 'ビソプロロール、アテノロール', 'en' => 'Bisoprolol, atenolol'],
            ],
            'NM' => ['action' => 'standard'],
        ],
        'carvedilol' => [
            'PM' => [
                'action' => 'monitor',
                'reason' => ['ja' => '副作用リスクやや増加', 'en' => 'Slightly increased adverse effect risk'],
            ],
            'NM' => ['action' => 'standard'],
        ],
        'propafenone' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '不整脈リスク', 'en' => 'Arrhythmia risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'flecainide' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '不整脈リスク', 'en' => 'Arrhythmia risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],

        // =====================================================
        // CYP2C19-related drugs
        // =====================================================
        'clopidogrel' => [
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '血栓イベントリスク増加', 'en' => 'Increased thrombotic event risk'],
                'alternative' => ['ja' => 'プラスグレル、チカグレロル', 'en' => 'Prasugrel, ticagrelor'],
            ],
            'IM' => [
                'action' => 'alternative',
                'reason' => ['ja' => '効果減弱の可能性', 'en' => 'Possibly reduced effect'],
                'alternative' => ['ja' => 'プラスグレル、チカグレロル', 'en' => 'Prasugrel, ticagrelor'],
            ],
            'NM' => ['action' => 'standard'],
            'UM' => ['action' => 'standard'],
        ],
        'omeprazole' => [
            'UM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'dose_adjustment' => 2.0,
            ],
            'RM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'dose_adjustment' => 1.5,
            ],
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '効果増強', 'en' => 'Enhanced effect'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'lansoprazole' => [
            'UM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'dose_adjustment' => 2.0,
            ],
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '効果増強', 'en' => 'Enhanced effect'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'esomeprazole' => [
            'UM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'dose_adjustment' => 2.0,
            ],
            'PM' => [
                'action' => 'standard',
                'reason' => ['ja' => '標準用量で十分', 'en' => 'Standard dose sufficient'],
            ],
            'NM' => ['action' => 'standard'],
        ],
        'pantoprazole' => [
            'UM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'dose_adjustment' => 2.0,
            ],
            'PM' => [
                'action' => 'standard',
                'reason' => ['ja' => '標準用量で十分', 'en' => 'Standard dose sufficient'],
            ],
            'NM' => ['action' => 'standard'],
        ],
        'voriconazole' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '血中濃度大幅上昇', 'en' => 'Significantly increased concentration'],
                'dose_adjustment' => 0.5,
            ],
            'UM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果不十分', 'en' => 'Inadequate effect'],
                'alternative' => ['ja' => '他の抗真菌薬を検討', 'en' => 'Consider alternative antifungal'],
            ],
            'NM' => ['action' => 'standard'],
        ],
        'clobazam' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '活性代謝物濃度上昇', 'en' => 'Increased active metabolite concentration'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'sertraline' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '副作用リスク', 'en' => 'Adverse effect risk'],
                'dose_adjustment' => 0.5,
            ],
            'UM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱の可能性', 'en' => 'Possibly reduced effect'],
                'dose_adjustment' => 1.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'escitalopram' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'QT延長・副作用リスク', 'en' => 'QT prolongation/adverse effect risk'],
                'dose_adjustment' => 0.5,
                'max_dose' => '10mg',
            ],
            'UM' => [
                'action' => 'alternative',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'alternative' => ['ja' => '他のSSRI', 'en' => 'Alternative SSRI'],
            ],
            'NM' => ['action' => 'standard'],
        ],
        'citalopram' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'QT延長・副作用リスク', 'en' => 'QT prolongation/adverse effect risk'],
                'dose_adjustment' => 0.5,
                'max_dose' => '20mg',
            ],
            'NM' => ['action' => 'standard'],
        ],

        // =====================================================
        // CYP2C9-related drugs
        // =====================================================
        'warfarin' => [
            '*2/*2' => [
                'action' => 'reduce',
                'reason' => ['ja' => '出血リスク増加', 'en' => 'Increased bleeding risk'],
                'dose_adjustment' => 0.4,
            ],
            '*2/*3' => [
                'action' => 'reduce',
                'reason' => ['ja' => '出血リスク増加', 'en' => 'Increased bleeding risk'],
                'dose_adjustment' => 0.3,
            ],
            '*3/*3' => [
                'action' => 'reduce',
                'reason' => ['ja' => '出血リスク大幅増加', 'en' => 'Significantly increased bleeding risk'],
                'dose_adjustment' => 0.2,
            ],
            '*1/*2' => [
                'action' => 'reduce',
                'reason' => ['ja' => '出血リスクやや増加', 'en' => 'Slightly increased bleeding risk'],
                'dose_adjustment' => 0.7,
            ],
            '*1/*3' => [
                'action' => 'reduce',
                'reason' => ['ja' => '出血リスク増加', 'en' => 'Increased bleeding risk'],
                'dose_adjustment' => 0.5,
            ],
            '*1/*1' => ['action' => 'standard'],
        ],
        'phenytoin' => [
            '*2/*2' => [
                'action' => 'reduce',
                'reason' => ['ja' => '毒性リスク', 'en' => 'Toxicity risk'],
                'dose_adjustment' => 0.75,
            ],
            '*2/*3' => [
                'action' => 'reduce',
                'reason' => ['ja' => '毒性リスク', 'en' => 'Toxicity risk'],
                'dose_adjustment' => 0.5,
            ],
            '*3/*3' => [
                'action' => 'reduce',
                'reason' => ['ja' => '重篤な毒性リスク', 'en' => 'Severe toxicity risk'],
                'dose_adjustment' => 0.25,
            ],
            '*1/*1' => ['action' => 'standard'],
        ],
        'celecoxib' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '心血管リスク', 'en' => 'Cardiovascular risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'fluvastatin' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'ミオパチーリスク', 'en' => 'Myopathy risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'siponimod' => [
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '重篤な副作用リスク', 'en' => 'Risk of severe adverse effects'],
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '副作用リスク', 'en' => 'Adverse effect risk'],
                'max_dose' => '1mg',
            ],
            'NM' => ['action' => 'standard'],
        ],
        'losartan' => [
            'PM' => [
                'action' => 'alternative',
                'reason' => ['ja' => '効果減弱（活性代謝物生成低下）', 'en' => 'Reduced effect (decreased active metabolite)'],
                'alternative' => ['ja' => '他のARB', 'en' => 'Alternative ARB'],
            ],
            'NM' => ['action' => 'standard'],
        ],

        // =====================================================
        // CYP3A5-related drugs
        // =====================================================
        'tacrolimus' => [
            '*1/*1' => [
                'action' => 'increase',
                'reason' => ['ja' => 'クリアランス増加', 'en' => 'Increased clearance'],
                'dose_adjustment' => 1.5,
            ],
            '*1/*3' => [
                'action' => 'standard',
                'reason' => ['ja' => '中間代謝', 'en' => 'Intermediate metabolism'],
            ],
            '*3/*3' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'クリアランス低下', 'en' => 'Decreased clearance'],
                'dose_adjustment' => 0.7,
            ],
        ],

        // =====================================================
        // CYP2B6-related drugs
        // =====================================================
        'efavirenz' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '中枢神経系副作用リスク', 'en' => 'CNS adverse effect risk'],
                'dose_adjustment' => 0.67,
            ],
            'UM' => [
                'action' => 'monitor',
                'reason' => ['ja' => '効果減弱の可能性', 'en' => 'Possibly reduced effect'],
            ],
            'NM' => ['action' => 'standard'],
        ],
        'methadone' => [
            'PM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '副作用リスク', 'en' => 'Adverse effect risk'],
                'dose_adjustment' => 0.75,
            ],
            'UM' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱', 'en' => 'Reduced effect'],
                'dose_adjustment' => 1.5,
            ],
            'NM' => ['action' => 'standard'],
        ],

        // =====================================================
        // SLCO1B1-related drugs
        // =====================================================
        'simvastatin' => [
            'poor_function' => [
                'action' => 'avoid',
                'reason' => ['ja' => 'ミオパチーリスク大幅増加', 'en' => 'Significantly increased myopathy risk'],
                'alternative' => ['ja' => 'プラバスタチン、ロスバスタチン', 'en' => 'Pravastatin, rosuvastatin'],
            ],
            'intermediate_function' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'ミオパチーリスク増加', 'en' => 'Increased myopathy risk'],
                'max_dose' => '20mg',
            ],
            'normal_function' => ['action' => 'standard'],
        ],
        'atorvastatin' => [
            'poor_function' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'ミオパチーリスク', 'en' => 'Myopathy risk'],
                'max_dose' => '40mg',
                'alternative' => ['ja' => 'プラバスタチン、ロスバスタチン', 'en' => 'Pravastatin, rosuvastatin'],
            ],
            'intermediate_function' => [
                'action' => 'monitor',
                'reason' => ['ja' => 'ミオパチーリスクやや増加', 'en' => 'Slightly increased myopathy risk'],
            ],
            'normal_function' => ['action' => 'standard'],
        ],
        'rosuvastatin' => [
            'poor_function' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'ミオパチーリスク', 'en' => 'Myopathy risk'],
                'max_dose' => '20mg',
            ],
            'normal_function' => ['action' => 'standard'],
        ],
        'pravastatin' => [
            'poor_function' => [
                'action' => 'monitor',
                'reason' => ['ja' => '血中濃度上昇', 'en' => 'Increased concentration'],
            ],
            'normal_function' => ['action' => 'standard'],
        ],
        'pitavastatin' => [
            'poor_function' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'ミオパチーリスク', 'en' => 'Myopathy risk'],
                'max_dose' => '2mg',
            ],
            'normal_function' => ['action' => 'standard'],
        ],

        // =====================================================
        // TPMT / NUDT15-related drugs
        // =====================================================
        'azathioprine' => [
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '致死的な骨髄抑制リスク', 'en' => 'Risk of fatal myelosuppression'],
                'alternative' => ['ja' => '他の免疫抑制薬', 'en' => 'Alternative immunosuppressants'],
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '骨髄抑制リスク', 'en' => 'Myelosuppression risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'mercaptopurine' => [
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '致死的な骨髄抑制リスク', 'en' => 'Risk of fatal myelosuppression'],
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '骨髄抑制リスク', 'en' => 'Myelosuppression risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'thioguanine' => [
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '致死的な骨髄抑制リスク', 'en' => 'Risk of fatal myelosuppression'],
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '骨髄抑制リスク', 'en' => 'Myelosuppression risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],

        // =====================================================
        // DPYD-related drugs
        // =====================================================
        'fluorouracil' => [
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '致死的な毒性リスク', 'en' => 'Risk of fatal toxicity'],
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '重篤な毒性リスク', 'en' => 'Severe toxicity risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'capecitabine' => [
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '致死的な毒性リスク', 'en' => 'Risk of fatal toxicity'],
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '重篤な毒性リスク', 'en' => 'Severe toxicity risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],
        'tegafur' => [
            'PM' => [
                'action' => 'avoid',
                'reason' => ['ja' => '致死的な毒性リスク', 'en' => 'Risk of fatal toxicity'],
            ],
            'IM' => [
                'action' => 'reduce',
                'reason' => ['ja' => '重篤な毒性リスク', 'en' => 'Severe toxicity risk'],
                'dose_adjustment' => 0.5,
            ],
            'NM' => ['action' => 'standard'],
        ],

        // =====================================================
        // UGT1A1-related drugs
        // =====================================================
        'irinotecan' => [
            '*28/*28' => [
                'action' => 'reduce',
                'reason' => ['ja' => '重篤な好中球減少・下痢リスク', 'en' => 'Severe neutropenia/diarrhea risk'],
                'dose_adjustment' => 0.7,
            ],
            '*1/*28' => [
                'action' => 'monitor',
                'reason' => ['ja' => '副作用リスクやや増加', 'en' => 'Slightly increased adverse effect risk'],
            ],
            '*1/*1' => ['action' => 'standard'],
        ],
        'atazanavir' => [
            '*28/*28' => [
                'action' => 'monitor',
                'reason' => ['ja' => '黄疸リスク（臨床的意義は限定的）', 'en' => 'Jaundice risk (limited clinical significance)'],
            ],
            '*1/*1' => ['action' => 'standard'],
        ],
        'nilotinib' => [
            '*28/*28' => [
                'action' => 'monitor',
                'reason' => ['ja' => '高ビリルビン血症リスク', 'en' => 'Hyperbilirubinemia risk'],
            ],
            '*1/*1' => ['action' => 'standard'],
        ],

        // =====================================================
        // NAT2-related drugs
        // =====================================================
        'isoniazid' => [
            'slow' => [
                'action' => 'monitor',
                'reason' => ['ja' => '末梢神経障害・肝毒性リスク', 'en' => 'Peripheral neuropathy/hepatotoxicity risk'],
                'dose_adjustment' => 0.75,
            ],
            'rapid' => [
                'action' => 'standard',
                'reason' => ['ja' => '効果減弱の可能性あり', 'en' => 'Possibly reduced effect'],
            ],
        ],
        'sulfasalazine' => [
            'slow' => [
                'action' => 'monitor',
                'reason' => ['ja' => '副作用リスク', 'en' => 'Adverse effect risk'],
            ],
            'rapid' => ['action' => 'standard'],
        ],

        // =====================================================
        // G6PD-related drugs
        // =====================================================
        'primaquine' => [
            'deficient' => [
                'action' => 'avoid',
                'reason' => ['ja' => '致死的な溶血リスク', 'en' => 'Risk of fatal hemolysis'],
                'alternative' => ['ja' => 'タフェノキン（要検査）', 'en' => 'Tafenoquine (requires testing)'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'rasburicase' => [
            'deficient' => [
                'action' => 'avoid',
                'reason' => ['ja' => '致死的な溶血・メトヘモグロビン血症リスク', 'en' => 'Risk of fatal hemolysis/methemoglobinemia'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'dapsone' => [
            'deficient' => [
                'action' => 'avoid',
                'reason' => ['ja' => '溶血リスク', 'en' => 'Hemolysis risk'],
                'alternative' => ['ja' => '他の抗菌薬', 'en' => 'Alternative antibiotics'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'chloroquine' => [
            'deficient' => [
                'action' => 'caution',
                'reason' => ['ja' => '溶血リスク（重症度による）', 'en' => 'Hemolysis risk (depends on severity)'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'nitrofurantoin' => [
            'deficient' => [
                'action' => 'avoid',
                'reason' => ['ja' => '溶血リスク', 'en' => 'Hemolysis risk'],
                'alternative' => ['ja' => '他の抗菌薬', 'en' => 'Alternative antibiotics'],
            ],
            'normal' => ['action' => 'standard'],
        ],

        // =====================================================
        // MT-RNR1-related drugs (Aminoglycosides)
        // =====================================================
        'gentamicin' => [
            'A1555G_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => '永続的難聴リスク', 'en' => 'Risk of permanent hearing loss'],
                'alternative' => ['ja' => '非アミノグリコシド系抗菌薬', 'en' => 'Non-aminoglycoside antibiotics'],
            ],
            'C1494T_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => '永続的難聴リスク', 'en' => 'Risk of permanent hearing loss'],
                'alternative' => ['ja' => '非アミノグリコシド系抗菌薬', 'en' => 'Non-aminoglycoside antibiotics'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'amikacin' => [
            'A1555G_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => '永続的難聴リスク', 'en' => 'Risk of permanent hearing loss'],
                'alternative' => ['ja' => '非アミノグリコシド系抗菌薬', 'en' => 'Non-aminoglycoside antibiotics'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'tobramycin' => [
            'A1555G_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => '永続的難聴リスク', 'en' => 'Risk of permanent hearing loss'],
                'alternative' => ['ja' => '非アミノグリコシド系抗菌薬', 'en' => 'Non-aminoglycoside antibiotics'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'streptomycin' => [
            'A1555G_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => '永続的難聴リスク', 'en' => 'Risk of permanent hearing loss'],
            ],
            'normal' => ['action' => 'standard'],
        ],

        // =====================================================
        // RYR1-related drugs (Malignant hyperthermia)
        // =====================================================
        'succinylcholine' => [
            'MHS' => [
                'action' => 'avoid',
                'reason' => ['ja' => '悪性高熱リスク', 'en' => 'Malignant hyperthermia risk'],
                'alternative' => ['ja' => '非脱分極性筋弛緩薬', 'en' => 'Non-depolarizing muscle relaxants'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'sevoflurane' => [
            'MHS' => [
                'action' => 'avoid',
                'reason' => ['ja' => '悪性高熱リスク', 'en' => 'Malignant hyperthermia risk'],
                'alternative' => ['ja' => '全静脈麻酔（TIVA）', 'en' => 'Total intravenous anesthesia (TIVA)'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'desflurane' => [
            'MHS' => [
                'action' => 'avoid',
                'reason' => ['ja' => '悪性高熱リスク', 'en' => 'Malignant hyperthermia risk'],
                'alternative' => ['ja' => '全静脈麻酔（TIVA）', 'en' => 'Total intravenous anesthesia (TIVA)'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'isoflurane' => [
            'MHS' => [
                'action' => 'avoid',
                'reason' => ['ja' => '悪性高熱リスク', 'en' => 'Malignant hyperthermia risk'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'halothane' => [
            'MHS' => [
                'action' => 'avoid',
                'reason' => ['ja' => '悪性高熱リスク', 'en' => 'Malignant hyperthermia risk'],
            ],
            'normal' => ['action' => 'standard'],
        ],

        // =====================================================
        // HLA-related drugs
        // =====================================================
        'abacavir' => [
            '*57:01_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => '過敏症症候群リスク', 'en' => 'Hypersensitivity syndrome risk'],
                'alternative' => ['ja' => '他のNRTI', 'en' => 'Alternative NRTIs'],
            ],
            '*57:01_negative' => ['action' => 'standard'],
        ],
        'carbamazepine' => [
            '*15:02_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => 'SJS/TENリスク', 'en' => 'SJS/TEN risk'],
                'alternative' => ['ja' => '他の抗てんかん薬', 'en' => 'Alternative antiepileptics'],
            ],
            '*31:01_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => 'SJS/TEN・DRESS症候群リスク', 'en' => 'SJS/TEN/DRESS syndrome risk'],
                'alternative' => ['ja' => '他の抗てんかん薬', 'en' => 'Alternative antiepileptics'],
            ],
            'negative' => ['action' => 'standard'],
        ],
        'oxcarbazepine' => [
            '*15:02_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => 'SJS/TENリスク', 'en' => 'SJS/TEN risk'],
                'alternative' => ['ja' => '他の抗てんかん薬', 'en' => 'Alternative antiepileptics'],
            ],
            'negative' => ['action' => 'standard'],
        ],
        'allopurinol' => [
            '*58:01_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => 'SJS/TENリスク', 'en' => 'SJS/TEN risk'],
                'alternative' => ['ja' => 'フェブキソスタット', 'en' => 'Febuxostat'],
            ],
            '*58:01_negative' => ['action' => 'standard'],
        ],
        'phenytoin' => [
            '*15:02_positive' => [
                'action' => 'avoid',
                'reason' => ['ja' => 'SJS/TENリスク', 'en' => 'SJS/TEN risk'],
                'alternative' => ['ja' => '他の抗てんかん薬', 'en' => 'Alternative antiepileptics'],
            ],
            'negative' => ['action' => 'standard'],
        ],
        'lamotrigine' => [
            '*15:02_positive' => [
                'action' => 'caution',
                'reason' => ['ja' => 'SJS/TENリスク（リスクはカルバマゼピンより低い）', 'en' => 'SJS/TEN risk (lower than carbamazepine)'],
            ],
            'negative' => ['action' => 'standard'],
        ],

        // =====================================================
        // IL28B / ITPA-related drugs
        // =====================================================
        'peginterferon' => [
            'CC' => [
                'action' => 'favorable',
                'reason' => ['ja' => 'SVR達成率高い', 'en' => 'High SVR rate expected'],
            ],
            'CT' => [
                'action' => 'standard',
                'reason' => ['ja' => '中間の応答率', 'en' => 'Intermediate response rate'],
            ],
            'TT' => [
                'action' => 'alternative',
                'reason' => ['ja' => 'SVR達成率低い', 'en' => 'Low SVR rate expected'],
                'alternative' => ['ja' => 'DAA療法を検討', 'en' => 'Consider DAA therapy'],
            ],
        ],
        'ribavirin' => [
            'ITPA_deficient' => [
                'action' => 'favorable',
                'reason' => ['ja' => '溶血性貧血リスク低下', 'en' => 'Reduced hemolytic anemia risk'],
            ],
            'ITPA_normal' => [
                'action' => 'monitor',
                'reason' => ['ja' => '溶血性貧血リスク', 'en' => 'Hemolytic anemia risk'],
            ],
        ],

        // =====================================================
        // VKORC1-related (Warfarin additional)
        // =====================================================
        'warfarin_vkorc1' => [
            'AA' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'ワルファリン高感受性', 'en' => 'High warfarin sensitivity'],
                'dose_adjustment' => 0.5,
            ],
            'GA' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'ワルファリン中感受性', 'en' => 'Intermediate warfarin sensitivity'],
                'dose_adjustment' => 0.75,
            ],
            'GG' => ['action' => 'standard'],
        ],

        // =====================================================
        // CYP1A2-related drugs
        // =====================================================
        'theophylline' => [
            'high_inducer' => [
                'action' => 'increase',
                'reason' => ['ja' => 'クリアランス増加', 'en' => 'Increased clearance'],
                'dose_adjustment' => 1.5,
            ],
            'low_inducer' => [
                'action' => 'reduce',
                'reason' => ['ja' => 'クリアランス低下', 'en' => 'Decreased clearance'],
                'dose_adjustment' => 0.75,
            ],
            'normal' => ['action' => 'standard'],
        ],
        'clozapine' => [
            'poor_metabolizer' => [
                'action' => 'reduce',
                'reason' => ['ja' => '血中濃度上昇・副作用リスク', 'en' => 'Increased concentration/adverse effects'],
                'dose_adjustment' => 0.67,
            ],
            'rapid_metabolizer' => [
                'action' => 'increase',
                'reason' => ['ja' => '効果減弱の可能性', 'en' => 'Possibly reduced effect'],
                'dose_adjustment' => 1.5,
            ],
            'normal' => ['action' => 'standard'],
        ],
        'olanzapine' => [
            'poor_metabolizer' => [
                'action' => 'reduce',
                'reason' => ['ja' => '血中濃度上昇', 'en' => 'Increased concentration'],
                'dose_adjustment' => 0.75,
            ],
            'normal' => ['action' => 'standard'],
        ],

        // =====================================================
        // G6PD-related drugs (oxidative stress-induced hemolysis risk)
        // Phenotype: 'deficient' / 'variable' / 'normal'
        // =====================================================
        'primaquine' => [
            'deficient' => [
                'action' => 'avoid',
                'reason' => ['ja' => '重度の溶血性貧血リスク', 'en' => 'Risk of severe hemolytic anemia'],
                'alternative' => ['ja' => 'タフェノキン（G6PD検査必須）', 'en' => 'Tafenoquine (G6PD testing required)'],
            ],
            'variable' => [
                'action' => 'avoid',
                'reason' => ['ja' => '溶血リスク（女性保因者）', 'en' => 'Hemolysis risk (female carriers)'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'dapsone' => [
            'deficient' => [
                'action' => 'avoid',
                'reason' => ['ja' => '重度の溶血性貧血・メトヘモグロビン血症リスク', 'en' => 'Risk of severe hemolytic anemia and methemoglobinemia'],
                'alternative' => ['ja' => 'クリンダマイシン、アトバコン', 'en' => 'Clindamycin, atovaquone'],
            ],
            'variable' => [
                'action' => 'caution',
                'reason' => ['ja' => '溶血リスク（女性保因者）', 'en' => 'Hemolysis risk (female carriers)'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'methylene_blue' => [
            'deficient' => [
                'action' => 'avoid',
                'reason' => ['ja' => '溶血リスク、メトヘモグロビン血症の治療に禁忌', 'en' => 'Hemolysis risk; contraindicated for methemoglobinemia treatment'],
                'alternative' => ['ja' => 'アスコルビン酸（高用量）', 'en' => 'Ascorbic acid (high dose)'],
            ],
            'variable' => [
                'action' => 'avoid',
                'reason' => ['ja' => '溶血リスク', 'en' => 'Hemolysis risk'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'nitrofurantoin' => [
            'deficient' => [
                'action' => 'avoid',
                'reason' => ['ja' => '溶血性貧血リスク', 'en' => 'Risk of hemolytic anemia'],
                'alternative' => ['ja' => 'トリメトプリム、ホスホマイシン', 'en' => 'Trimethoprim, fosfomycin'],
            ],
            'variable' => [
                'action' => 'caution',
                'reason' => ['ja' => '溶血リスク（女性保因者）', 'en' => 'Hemolysis risk (female carriers)'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'rasburicase' => [
            'deficient' => [
                'action' => 'avoid',
                'reason' => ['ja' => '重度溶血・メトヘモグロビン血症リスク（FDA Black Box Warning）', 'en' => 'Risk of severe hemolysis and methemoglobinemia (FDA Black Box Warning)'],
                'alternative' => ['ja' => 'アロプリノール、フェブキソスタット', 'en' => 'Allopurinol, febuxostat'],
            ],
            'variable' => [
                'action' => 'avoid',
                'reason' => ['ja' => '溶血リスク（女性保因者も禁忌）', 'en' => 'Hemolysis risk (contraindicated in female carriers too)'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'pegloticase' => [
            'deficient' => [
                'action' => 'avoid',
                'reason' => ['ja' => '重度溶血・メトヘモグロビン血症リスク（FDA Black Box Warning）', 'en' => 'Risk of severe hemolysis and methemoglobinemia (FDA Black Box Warning)'],
                'alternative' => ['ja' => 'アロプリノール、フェブキソスタット', 'en' => 'Allopurinol, febuxostat'],
            ],
            'variable' => [
                'action' => 'avoid',
                'reason' => ['ja' => '溶血リスク（女性保因者も禁忌）', 'en' => 'Hemolysis risk (contraindicated in female carriers too)'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'sulfamethoxazole' => [
            'deficient' => [
                'action' => 'caution',
                'reason' => ['ja' => '高用量で溶血リスク', 'en' => 'Hemolysis risk at high doses'],
                'alternative' => ['ja' => 'トリメトプリム単独', 'en' => 'Trimethoprim alone'],
            ],
            'variable' => [
                'action' => 'monitor',
                'reason' => ['ja' => '溶血リスク要監視', 'en' => 'Monitor for hemolysis'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'chloroquine' => [
            'deficient' => [
                'action' => 'caution',
                'reason' => ['ja' => '高用量で溶血リスク', 'en' => 'Hemolysis risk at high doses'],
                'dose_adjustment' => 0.75,
            ],
            'variable' => [
                'action' => 'monitor',
                'reason' => ['ja' => '溶血リスク要監視', 'en' => 'Monitor for hemolysis'],
            ],
            'normal' => ['action' => 'standard'],
        ],
        'quinine' => [
            'deficient' => [
                'action' => 'caution',
                'reason' => ['ja' => '溶血リスク', 'en' => 'Hemolysis risk'],
            ],
            'normal' => ['action' => 'standard'],
        ],
    ];

    // =========================================================================
    // SECTION 2: DISEASE RISK MARKERS
    // =========================================================================
    //
    // Evidence Levels:
    // - A: Multiple large GWAS, clinical utility established
    // - B: Large GWAS, replicated
    // - C: Mid-scale studies, additional validation recommended
    //
    // 23andMe/AncestryDNA Compatibility:
    // - ✓ = Likely included
    // - △ = Version dependent
    // - × = Usually not included
    // =========================================================================

    public const DISEASE_MARKERS = [
        // ===== Neurodegenerative Diseases =====
        'alzheimer' => [
            'name' => ['ja' => 'アルツハイマー病', 'en' => "Alzheimer's Disease"],
            'category' => 'neurological',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'snps' => [
                'rs429358' => [
                    'gene' => 'APOE',
                    'risk_allele' => 'C',
                    'effect' => 'ε4_component',
                    'odds_ratio' => 3.2, // ε3/ε4 heterozygous
                    'source' => 'Farrer et al. 1997 JAMA meta-analysis',
                    'pmid' => '9343467', // n=29,000+, multi-ethnic
                    'population' => 'Caucasian (primary), validated in Asian/African',
                    'chip_coverage' => 'high',
                ],
                'rs7412' => [
                    'gene' => 'APOE',
                    'risk_allele' => 'C',
                    'effect' => 'ε4_vs_ε2',
                    'odds_ratio' => 0.6, // ε2 is protective
                    'source' => 'Farrer et al. 1997 JAMA meta-analysis',
                    'pmid' => '9343467',
                    'population' => 'Caucasian (primary)',
                    'chip_coverage' => 'high',
                ],
            ],
            'haplotype_logic' => 'APOE', // Special handling for ε2/ε3/ε4
            'risk_interpretation' => [
                'ε4/ε4' => ['risk_multiplier' => 12.0, 'lifetime_risk' => 0.51],
                'ε3/ε4' => ['risk_multiplier' => 3.2, 'lifetime_risk' => 0.23],
                'ε2/ε4' => ['risk_multiplier' => 2.6, 'lifetime_risk' => 0.20],
                'ε3/ε3' => ['risk_multiplier' => 1.0, 'lifetime_risk' => 0.09],
                'ε2/ε3' => ['risk_multiplier' => 0.6, 'lifetime_risk' => 0.06],
                'ε2/ε2' => ['risk_multiplier' => 0.4, 'lifetime_risk' => 0.04],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '有酸素運動（週150分以上）、地中海食、認知トレーニング、十分な睡眠（7-8時間）、社会的交流維持、血圧・血糖管理',
                'en' => 'Aerobic exercise (150+ min/week), Mediterranean diet, cognitive training, adequate sleep (7-8h), social engagement, BP/glucose control',
            ],
            'screening' => [
                'ja' => '50歳から認知機能検査（MMSE/MoCA）を年1回推奨、高リスク者は45歳から',
                'en' => 'Annual cognitive assessment (MMSE/MoCA) from age 50, high-risk from 45',
            ],
            'notes' => [
                'ja' => 'APOE ε4は最大のリスク因子だが、ε4保有者でも発症しない人は多い。生活習慣改善でリスク低減可能。',
                'en' => 'APOE ε4 is the strongest risk factor, but many carriers never develop AD. Lifestyle modifications can reduce risk.',
            ],
        ],

        'parkinson' => [
            'name' => ['ja' => 'パーキンソン病', 'en' => "Parkinson's Disease"],
            'category' => 'neurological',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'snps' => [
                'rs34637584' => [
                    'gene' => 'LRRK2',
                    'risk_allele' => 'A',
                    'effect' => 'G2019S',
                    'odds_ratio' => 9.6,
                    'source' => 'Healy et al. 2008 Lancet Neurology',
                    'pmid' => '18539534',
                    'population' => 'Caucasian; Ashkenazi Jewish/North African Berber have higher frequency',
                    'chip_coverage' => 'high',
                ],
                'rs76763715' => [
                    'gene' => 'GBA',
                    'risk_allele' => 'A',
                    'effect' => 'N370S',
                    'odds_ratio' => 5.4,
                    'source' => 'Sidransky et al. 2009 NEJM',
                    'pmid' => '19846850', // n=5,691 PD cases, 4,898 controls
                    'population' => 'Multi-ethnic (16 centers worldwide)',
                    'chip_coverage' => 'medium',
                ],
                'rs356182' => [
                    'gene' => 'SNCA',
                    'risk_allele' => 'A',
                    'effect' => 'increased_expression',
                    'odds_ratio' => 1.3,
                    'source' => 'Nalls et al. 2014 Nat Genet',
                    'pmid' => '25064009', // GWAS meta-analysis
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '有酸素運動（特に高強度）、カフェイン摂取、禁煙（逆説的だが喫煙は低リスク）、農薬曝露回避',
                'en' => 'Aerobic exercise (especially high-intensity), caffeine intake, pesticide exposure avoidance',
            ],
            'screening' => [
                'ja' => '高リスク者は神経内科での定期評価、嗅覚検査、DATスキャン',
                'en' => 'High-risk: periodic neurological evaluation, smell tests, DaT scan',
            ],
        ],

        // ===== Cardiovascular Diseases =====
        'coronary_artery_disease' => [
            'name' => ['ja' => '冠動脈疾患', 'en' => 'Coronary Artery Disease'],
            'category' => 'cardiovascular',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'snps' => [
                'rs10757278' => [
                    'gene' => '9p21.3',
                    'risk_allele' => 'G',
                    'effect' => 'CDKN2A/2B_regulation',
                    'odds_ratio' => 1.29,
                    'source' => 'McPherson et al. 2007 Science',
                    'pmid' => '17478681',
                    'population' => 'European/Caucasian',
                    'chip_coverage' => 'high',
                ],
                'rs4977574' => [
                    'gene' => '9p21.3',
                    'risk_allele' => 'G',
                    'effect' => 'CDKN2A/2B_regulation',
                    'odds_ratio' => 1.25,
                    'source' => 'Schunkert et al. 2011 Nat Genet (CARDIoGRAM)',
                    'pmid' => '21378990',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs10455872' => [
                    'gene' => 'LPA',
                    'risk_allele' => 'G',
                    'effect' => 'elevated_Lp(a)',
                    'odds_ratio' => 1.70, // per-allele (Clarke 2009 NEJM)
                    'source' => 'Clarke et al. 2009 NEJM',
                    'pmid' => '20032323',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs3798220' => [
                    'gene' => 'LPA',
                    'risk_allele' => 'C',
                    'effect' => 'elevated_Lp(a)',
                    'odds_ratio' => 1.92,
                    'source' => 'Clarke et al. 2009 NEJM',
                    'pmid' => '20032323',
                    'population' => 'European',
                    'chip_coverage' => 'medium',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => 'LDLコレステロール管理、禁煙、血圧管理、運動、地中海食、体重管理',
                'en' => 'LDL cholesterol control, smoking cessation, BP control, exercise, Mediterranean diet, weight management',
            ],
            'screening' => [
                'ja' => '高リスク者は30歳からLp(a)測定、頸動脈エコー、冠動脈CT（カルシウムスコア）',
                'en' => 'High-risk: Lp(a) measurement from 30, carotid ultrasound, coronary CT calcium score',
            ],
        ],

        'atrial_fibrillation' => [
            'name' => ['ja' => '心房細動', 'en' => 'Atrial Fibrillation'],
            'category' => 'cardiovascular',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'snps' => [
                'rs2200733' => [
                    'gene' => 'PITX2',
                    'risk_allele' => 'T',
                    'effect' => 'left_atrium_development',
                    'odds_ratio' => 1.72,
                    'source' => 'Gudbjartsson et al. 2007 Nature',
                    'pmid' => '17603472',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs10033464' => [
                    'gene' => 'PITX2',
                    'risk_allele' => 'T',
                    'effect' => 'left_atrium_development',
                    'odds_ratio' => 1.39,
                    'source' => 'Gudbjartsson et al. 2007 Nature',
                    'pmid' => '17603472',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs13376333' => [
                    'gene' => 'KCNN3',
                    'risk_allele' => 'C',
                    'effect' => 'ion_channel_function',
                    'odds_ratio' => 1.52,
                    'source' => 'Ellinor et al. 2010 Nat Genet',
                    'pmid' => '20173747',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '体重管理、血圧管理、適度な飲酒、睡眠時無呼吸の治療、有酸素運動（過度は逆効果）',
                'en' => 'Weight management, BP control, moderate alcohol, treat sleep apnea, exercise (excessive may increase risk)',
            ],
            'screening' => [
                'ja' => '高リスク者は50歳から心電図年1回、自己脈拍チェック習慣化',
                'en' => 'High-risk: annual ECG from 50, regular pulse self-checks',
            ],
        ],

        'venous_thromboembolism' => [
            'name' => ['ja' => '静脈血栓塞栓症', 'en' => 'Venous Thromboembolism'],
            'category' => 'cardiovascular',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'snps' => [
                'rs6025' => [
                    'gene' => 'F5',
                    'risk_allele' => 'A',
                    'effect' => 'Factor_V_Leiden',
                    'odds_ratio' => 2.7,  // heterozygous
                    'odds_ratio_hom' => 15.0, // homozygous
                    'source' => 'Defined et al. 2004; Klarin et al. 2024 Blood',
                    'pmid' => '38498041', // FinnGen/UK Biobank 2024
                    'population' => 'European (5-8% carrier frequency)',
                    'chip_coverage' => 'high',
                ],
                'rs1799963' => [
                    'gene' => 'F2',
                    'risk_allele' => 'A',
                    'effect' => 'Prothrombin_G20210A',
                    'odds_ratio' => 2.8,
                    'source' => 'Poort et al. 1996 Blood',
                    'pmid' => '8916933',
                    'population' => 'European (2-3% carrier frequency)',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '長時間座位・臥床回避、水分摂取、弾性ストッキング（長距離移動時）、経口避妊薬のリスク認識',
                'en' => 'Avoid prolonged sitting/bed rest, hydration, compression stockings for travel, awareness of OCP risk',
            ],
            'screening' => [
                'ja' => '手術前・妊娠前に凝固検査推奨、家族歴ある場合は早期検査',
                'en' => 'Coagulation testing before surgery/pregnancy, early testing if family history',
            ],
            'clinical_implications' => [
                'ja' => 'エストロゲン含有避妊薬は禁忌の可能性、長距離フライト時は予防策必須',
                'en' => 'Estrogen-containing contraceptives may be contraindicated, mandatory precautions for long flights',
            ],
        ],

        // ===== Metabolic Diseases =====
        'type2_diabetes' => [
            'name' => ['ja' => '2型糖尿病', 'en' => 'Type 2 Diabetes'],
            'category' => 'metabolic',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'snps' => [
                'rs7903146' => [
                    'gene' => 'TCF7L2',
                    'risk_allele' => 'T',
                    'effect' => 'beta_cell_function',
                    'odds_ratio' => 1.46, // per-allele OR (meta-analysis pooled)
                    'odds_ratio_hom' => 2.13, // TT homozygous (1.46² ≈ 2.13)
                    'source' => 'Cauchi et al. 2007 J Mol Med meta-analysis',
                    'pmid' => '17476472', // n=29,195 controls, 17,202 cases
                    'population' => 'Multi-ethnic (Caucasian, Asian, African)',
                    'chip_coverage' => 'high',
                ],
                'rs1801282' => [
                    'gene' => 'PPARG',
                    'risk_allele' => 'C',
                    'effect' => 'Pro12Ala_protective',
                    'odds_ratio' => 0.86, // G allele is protective
                    'source' => 'Altshuler et al. 2000 Nat Genet',
                    'pmid' => '10973253',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
                'rs5219' => [
                    'gene' => 'KCNJ11',
                    'risk_allele' => 'T',
                    'effect' => 'E23K',
                    'odds_ratio' => 1.15,
                    'source' => 'Gloyn et al. 2003 Diabetes',
                    'pmid' => '12540637',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs13266634' => [
                    'gene' => 'SLC30A8',
                    'risk_allele' => 'C',
                    'effect' => 'zinc_transport',
                    'odds_ratio' => 1.12,
                    'source' => 'Sladek et al. 2007 Nature',
                    'pmid' => '17293876',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs10811661' => [
                    'gene' => 'CDKN2A/2B',
                    'risk_allele' => 'T',
                    'effect' => 'beta_cell_proliferation',
                    'odds_ratio' => 1.20,
                    'source' => 'Scott et al. 2007 Science',
                    'pmid' => '17463246',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '体重管理（BMI 25未満）、低GI食、食物繊維摂取、有酸素運動＋筋トレ、禁煙',
                'en' => 'Weight management (BMI <25), low-GI diet, fiber intake, aerobic + resistance exercise, no smoking',
            ],
            'screening' => [
                'ja' => '高リスク者は30歳からHbA1c・空腹時血糖を年1回、OGTT推奨',
                'en' => 'High-risk: annual HbA1c/fasting glucose from 30, OGTT recommended',
            ],
        ],

        // ===== Cancer =====
        'breast_cancer' => [
            'name' => ['ja' => '乳がん', 'en' => 'Breast Cancer'],
            'category' => 'cancer',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'sex_specific' => 'female', // Primarily affects females
            'snps' => [
                // Note: BRCA1/2 full sequencing not available in consumer tests
                // These are common variants with moderate effects
                'rs2981582' => [
                    'gene' => 'FGFR2',
                    'risk_allele' => 'A',
                    'effect' => 'FGFR2_expression',
                    'odds_ratio' => 1.31, // per-allele OR (ER+ breast cancer)
                    'source' => 'Easton et al. 2007 Nature',
                    'pmid' => '17529967',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs3803662' => [
                    'gene' => 'TOX3',
                    'risk_allele' => 'A',
                    'effect' => 'unknown',
                    'odds_ratio' => 1.20,
                    'source' => 'Stacey et al. 2007 Nat Genet',
                    'pmid' => '17529974',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs13387042' => [
                    'gene' => '2q35',
                    'risk_allele' => 'A',
                    'effect' => 'unknown',
                    'odds_ratio' => 1.20,
                    'source' => 'Stacey et al. 2007 Nat Genet',
                    'pmid' => '17529974',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs1045485' => [
                    'gene' => 'CASP8',
                    'risk_allele' => 'C',
                    'effect' => 'D302H_protective',
                    'odds_ratio' => 0.88,
                    'source' => 'Cox et al. 2007 Nat Genet',
                    'pmid' => '17293864',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'high_penetrance_note' => [
                'ja' => '注意: BRCA1/BRCA2の病的変異は消費者向け検査では3変異のみ検出。完全な評価には臨床検査が必要。',
                'en' => 'Note: Consumer tests detect only 3 BRCA1/2 variants. Complete assessment requires clinical testing.',
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '適正体重維持、アルコール制限、母乳育児推奨、ホルモン療法は慎重に',
                'en' => 'Maintain healthy weight, limit alcohol, breastfeeding recommended, caution with hormone therapy',
            ],
            'screening' => [
                'ja' => '高リスク者は30歳からマンモグラフィ＋乳房MRI年1回、自己検診月1回',
                'en' => 'High-risk: annual mammography + breast MRI from 30, monthly self-exam',
            ],
        ],

        'colorectal_cancer' => [
            'name' => ['ja' => '大腸がん', 'en' => 'Colorectal Cancer'],
            'category' => 'cancer',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'snps' => [
                'rs6983267' => [
                    'gene' => '8q24',
                    'risk_allele' => 'G',
                    'effect' => 'MYC_regulation',
                    'odds_ratio' => 1.22, // per-allele (Haiman 2007)
                    'source' => 'Tomlinson et al. 2007 Nat Genet',
                    'pmid' => '17618284',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
                'rs4939827' => [
                    'gene' => 'SMAD7',
                    'risk_allele' => 'T',
                    'effect' => 'TGF-beta_signaling',
                    'odds_ratio' => 1.20,
                    'source' => 'Broderick et al. 2007 Nat Genet',
                    'pmid' => '17618283',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs4779584' => [
                    'gene' => 'GREM1',
                    'risk_allele' => 'T',
                    'effect' => 'BMP_signaling',
                    'odds_ratio' => 1.26,
                    'source' => 'Jaeger et al. 2008 Nat Genet',
                    'pmid' => '18372905',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '食物繊維摂取、赤肉・加工肉制限、適度な運動、禁煙、アルコール制限、アスピリン（医師相談）',
                'en' => 'Fiber intake, limit red/processed meat, exercise, no smoking, limit alcohol, aspirin (consult physician)',
            ],
            'screening' => [
                'ja' => '高リスク者は40歳から大腸内視鏡5年毎（通常は50歳から）、便潜血年1回',
                'en' => 'High-risk: colonoscopy every 5 years from 40 (usually 50), annual fecal occult blood test',
            ],
        ],

        'prostate_cancer' => [
            'name' => ['ja' => '前立腺がん', 'en' => 'Prostate Cancer'],
            'category' => 'cancer',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'sex_specific' => 'male',
            'snps' => [
                'rs1447295' => [
                    'gene' => '8q24',
                    'risk_allele' => 'A',
                    'effect' => 'MYC_regulation',
                    'odds_ratio' => 1.51, // per-allele (Amundadottir 2006)
                    'source' => 'Amundadottir et al. 2006 Nat Genet',
                    'pmid' => '16862119',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
                'rs16901979' => [
                    'gene' => '8q24',
                    'risk_allele' => 'A',
                    'effect' => 'MYC_regulation',
                    'odds_ratio' => 1.79, // Gudmundsson 2007; meta-analysis 1.48
                    'source' => 'Gudmundsson et al. 2007 Nat Genet',
                    'pmid' => '17401363',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs10993994' => [
                    'gene' => 'MSMB',
                    'risk_allele' => 'T',
                    'effect' => 'PSP94_expression',
                    'odds_ratio' => 1.25,
                    'source' => 'Eeles et al. 2008 Nat Genet',
                    'pmid' => '18264098',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs17632542' => [
                    'gene' => 'KLK3',
                    'risk_allele' => 'T',
                    'effect' => 'PSA_levels',
                    'odds_ratio' => 1.20,
                    'source' => 'Parikh et al. 2011 PNAS',
                    'pmid' => '21743467',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => 'リコピン摂取（トマト）、適正体重維持、運動',
                'en' => 'Lycopene intake (tomatoes), maintain healthy weight, exercise',
            ],
            'screening' => [
                'ja' => '高リスク者は45歳からPSA検査年1回（通常は50歳から）、家族歴あれば40歳から',
                'en' => 'High-risk: annual PSA from 45 (usually 50), from 40 if family history',
            ],
        ],

        // ===== Eye Diseases =====
        'macular_degeneration' => [
            'name' => ['ja' => '加齢黄斑変性', 'en' => 'Age-related Macular Degeneration'],
            'category' => 'ophthalmological',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'snps' => [
                'rs1061170' => [
                    'gene' => 'CFH',
                    'risk_allele' => 'C',
                    'effect' => 'Y402H',
                    'odds_ratio' => 2.45,
                    'odds_ratio_hom' => 6.32,
                    'source' => 'Klein et al. 2005 Science',
                    'pmid' => '15761122',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs10490924' => [
                    'gene' => 'ARMS2',
                    'risk_allele' => 'T',
                    'effect' => 'A69S',
                    'odds_ratio' => 2.69,
                    'odds_ratio_hom' => 8.21,
                    'source' => 'Rivera et al. 2005 Hum Mol Genet',
                    'pmid' => '16174643',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs2230199' => [
                    'gene' => 'C3',
                    'risk_allele' => 'G',
                    'effect' => 'R102G',
                    'odds_ratio' => 1.45,
                    'source' => 'Yates et al. 2007 NEJM',
                    'pmid' => '17634449',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '禁煙（最重要）、ルテイン・ゼアキサンチン摂取、紫外線防護、AREDS2サプリ（高リスク者）',
                'en' => 'No smoking (most important), lutein/zeaxanthin intake, UV protection, AREDS2 supplements (high-risk)',
            ],
            'screening' => [
                'ja' => '高リスク者は50歳からOCT検査年1回、アムスラーグリッド自己チェック',
                'en' => 'High-risk: annual OCT from 50, Amsler grid self-monitoring',
            ],
        ],

        'glaucoma' => [
            'name' => ['ja' => '緑内障', 'en' => 'Primary Open-Angle Glaucoma'],
            'category' => 'ophthalmological',
            'evidence_level' => 'B',
            'inheritance' => 'complex',
            'snps' => [
                'rs4656461' => [
                    'gene' => 'TMCO1',
                    'risk_allele' => 'G',
                    'effect' => 'IOP_regulation',
                    'odds_ratio' => 1.68,
                    'source' => 'Burdon et al. 2011 Nat Genet',
                    'pmid' => '21532571',
                    'population' => 'European/Australian',
                    'chip_coverage' => 'high',
                ],
                'rs10483727' => [
                    'gene' => 'SIX1/SIX6',
                    'risk_allele' => 'A',
                    'effect' => 'optic_nerve_development',
                    'odds_ratio' => 1.32,
                    'source' => 'Ramdas et al. 2010 Nat Genet',
                    'pmid' => '20835242',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs2165241' => [
                    'gene' => 'LOXL1',
                    'risk_allele' => 'T',
                    'effect' => 'exfoliation_syndrome',
                    'odds_ratio' => 2.46,
                    'source' => 'Thorleifsson et al. 2007 Science',
                    'pmid' => '17690259',
                    'population' => 'Scandinavian',
                    'chip_coverage' => 'high',
                    'population_note' => 'Exfoliation glaucoma',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '定期的眼圧チェック、有酸素運動（眼圧低下効果）、頭を下げる姿勢を避ける',
                'en' => 'Regular IOP checks, aerobic exercise (lowers IOP), avoid head-down positions',
            ],
            'screening' => [
                'ja' => '高リスク者は40歳から眼科検診年1回（眼圧、眼底、視野検査）',
                'en' => 'High-risk: annual eye exam from 40 (IOP, fundus, visual field)',
            ],
        ],

        // ===== Autoimmune Diseases =====
        'rheumatoid_arthritis' => [
            'name' => ['ja' => '関節リウマチ', 'en' => 'Rheumatoid Arthritis'],
            'category' => 'autoimmune',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'snps' => [
                'rs6910071' => [
                    'gene' => 'HLA-DRB1',
                    'risk_allele' => 'A',
                    'effect' => 'shared_epitope',
                    'odds_ratio' => 2.88,
                    'source' => 'Raychaudhuri et al. 2012 Nat Genet',
                    'pmid' => '22286218',
                    'population' => 'European',
                    'chip_coverage' => 'medium',
                ],
                'rs2476601' => [
                    'gene' => 'PTPN22',
                    'risk_allele' => 'A',
                    'effect' => 'R620W',
                    'odds_ratio' => 1.75, // RF+ RA per-allele (Lee 2005)
                    'source' => 'Begovich et al. 2004 Am J Hum Genet',
                    'pmid' => '15208781',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs3761847' => [
                    'gene' => 'TRAF1-C5',
                    'risk_allele' => 'G',
                    'effect' => 'NF-kB_signaling',
                    'odds_ratio' => 1.32,
                    'source' => 'Plenge et al. 2007 NEJM',
                    'pmid' => '17804836',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '禁煙（最重要）、歯周病治療、オメガ3脂肪酸摂取、適正体重維持',
                'en' => 'No smoking (most important), treat periodontal disease, omega-3 intake, healthy weight',
            ],
            'screening' => [
                'ja' => '関節症状出現時は早期にリウマチ専門医受診、抗CCP抗体・RF検査',
                'en' => 'Early rheumatology consultation if joint symptoms, anti-CCP antibody and RF testing',
            ],
        ],

        'celiac_disease' => [
            'name' => ['ja' => 'セリアック病', 'en' => 'Celiac Disease'],
            'category' => 'autoimmune',
            'evidence_level' => 'A',
            'inheritance' => 'complex',
            'snps' => [
                'rs2187668' => [
                    'gene' => 'HLA-DQ2.5',
                    'risk_allele' => 'T',
                    'effect' => 'DQA1*05_DQB1*02',
                    'odds_ratio' => 7.04, // van Heel 2007 (95% CI 6.08-8.15)
                    'source' => 'van Heel et al. 2007 Nat Genet',
                    'pmid' => '17558408',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs7454108' => [
                    'gene' => 'HLA-DQ8',
                    'risk_allele' => 'C',
                    'effect' => 'DQA1*03_DQB1*0302',
                    'odds_ratio' => 2.81,
                    'source' => 'van Heel et al. 2007 Nat Genet',
                    'pmid' => '17558408',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '消化器症状がある場合はグルテン除去前に検査。HLA陰性なら発症リスクほぼゼロ。',
                'en' => 'Test before eliminating gluten if symptomatic. HLA-negative means near-zero risk.',
            ],
            'screening' => [
                'ja' => '消化器症状・鉄欠乏性貧血・骨粗鬆症時に抗tTG抗体検査',
                'en' => 'Anti-tTG antibody testing if GI symptoms, iron deficiency anemia, or osteoporosis',
            ],
            'notes' => [
                'ja' => 'HLA-DQ2/DQ8陰性ならセリアック病の可能性は99%以上除外される',
                'en' => 'HLA-DQ2/DQ8 negative essentially rules out celiac disease (>99%)',
            ],
        ],

        // ===== Psychiatric Disorders =====
        'bipolar_disorder' => [
            'name' => ['ja' => '双極性障害', 'en' => 'Bipolar Disorder'],
            'category' => 'psychiatric',
            'evidence_level' => 'B',
            'inheritance' => 'complex',
            'snps' => [
                'rs4027132' => [
                    'gene' => 'CACNA1C',
                    'risk_allele' => 'A',
                    'effect' => 'calcium_channel',
                    'odds_ratio' => 1.18,
                    'source' => 'Ferreira et al. 2008 Nat Genet',
                    'pmid' => '18711365',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs1006737' => [
                    'gene' => 'CACNA1C',
                    'risk_allele' => 'A',
                    'effect' => 'calcium_channel',
                    'odds_ratio' => 1.15,
                    'source' => 'Green et al. 2010 Mol Psychiatry',
                    'pmid' => '19786961',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs10994336' => [
                    'gene' => 'ANK3',
                    'risk_allele' => 'T',
                    'effect' => 'node_of_Ranvier',
                    'odds_ratio' => 1.45,
                    'source' => 'Ferreira et al. 2008 Nat Genet',
                    'pmid' => '18711365',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '規則正しい生活リズム、十分な睡眠、ストレス管理、アルコール・薬物回避',
                'en' => 'Regular daily routine, adequate sleep, stress management, avoid alcohol/substances',
            ],
            'screening' => [
                'ja' => '気分の波が激しい場合は精神科受診、家族歴がある場合は特に注意',
                'en' => 'Psychiatric consultation if significant mood swings, especially with family history',
            ],
        ],

        'schizophrenia' => [
            'name' => ['ja' => '統合失調症', 'en' => 'Schizophrenia'],
            'category' => 'psychiatric',
            'evidence_level' => 'B',
            'inheritance' => 'complex',
            'snps' => [
                'rs1625579' => [
                    'gene' => 'MIR137',
                    'risk_allele' => 'T',
                    'effect' => 'microRNA_regulation',
                    'odds_ratio' => 1.22,
                    'source' => 'Ripke et al. 2011 Nat Genet',
                    'pmid' => '21926974',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs2021722' => [
                    'gene' => 'TRIM26',
                    'risk_allele' => 'C',
                    'effect' => 'MHC_region',
                    'odds_ratio' => 1.15,
                    'source' => 'Ripke et al. 2014 Nature (PGC)',
                    'pmid' => '25056061',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs4129585' => [
                    'gene' => 'CSMD1',
                    'risk_allele' => 'T',
                    'effect' => 'complement_regulation',
                    'odds_ratio' => 1.11,
                    'source' => 'Ripke et al. 2014 Nature (PGC)',
                    'pmid' => '25056061',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'actionable' => true,
            'prevention' => [
                'ja' => '大麻使用回避（特に思春期）、ストレス軽減、早期介入プログラムへのアクセス',
                'en' => 'Avoid cannabis (especially adolescence), stress reduction, early intervention programs',
            ],
            'screening' => [
                'ja' => '家族歴がある若年者は前駆症状に注意（社会的引きこもり、知覚異常）',
                'en' => 'Young people with family history: watch for prodromal symptoms (social withdrawal, perceptual disturbances)',
            ],
        ],
    ];

    // =========================================================================
    // SECTION 3: TRAIT MARKERS
    // =========================================================================
    //
    // Actionable trait information:
    // - Genetic tendencies related to diet/nutrition
    // - Genetic tendencies related to exercise/fitness
    // - Genetic tendencies related to metabolism/physiology
    // =========================================================================

    public const TRAIT_MARKERS = [
        // ===== Metabolism/Nutrition =====
        'caffeine_metabolism' => [
            'name' => ['ja' => 'カフェイン代謝', 'en' => 'Caffeine Metabolism'],
            'category' => 'metabolism',
            'snps' => [
                'rs762551' => [
                    'gene' => 'CYP1A2',
                    'fast_allele' => 'A',
                    'slow_allele' => 'C',
                    'source' => 'Cornelis et al. 2006 JAMA',
                    'pmid' => '16522833',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
            ],
            'phenotypes' => [
                'AA' => [
                    'phenotype' => ['ja' => '高速代謝', 'en' => 'Fast Metabolizer'],
                    'description' => ['ja' => 'カフェインを速く分解。適度なコーヒー摂取は心臓病リスク低下と関連。', 'en' => 'Breaks down caffeine quickly. Moderate coffee intake associated with reduced heart disease risk.'],
                    'recommendation' => ['ja' => '1日3-4杯のコーヒーは問題なし', 'en' => '3-4 cups of coffee per day is generally fine'],
                ],
                'AC' => [
                    'phenotype' => ['ja' => '中間代謝', 'en' => 'Intermediate Metabolizer'],
                    'description' => ['ja' => 'カフェイン代謝は中程度。', 'en' => 'Moderate caffeine metabolism.'],
                    'recommendation' => ['ja' => '1日2-3杯のコーヒーを推奨', 'en' => '2-3 cups of coffee per day recommended'],
                ],
                'CC' => [
                    'phenotype' => ['ja' => '低速代謝', 'en' => 'Slow Metabolizer'],
                    'description' => ['ja' => 'カフェインが体内に長く留まる。過剰摂取で心臓病リスク上昇の可能性。', 'en' => 'Caffeine stays in body longer. Excess intake may increase heart disease risk.'],
                    'recommendation' => ['ja' => '1日1-2杯に制限、午後は避ける', 'en' => 'Limit to 1-2 cups, avoid afternoon consumption'],
                ],
            ],
            'actionable' => true,
        ],

        'alcohol_flush' => [
            'name' => ['ja' => 'アルコールフラッシング', 'en' => 'Alcohol Flush Reaction'],
            'category' => 'metabolism',
            'snps' => [
                'rs671' => [
                    'gene' => 'ALDH2',
                    'normal_allele' => 'G',
                    'deficient_allele' => 'A',
                    'source' => 'Yang et al. 2015 meta-analysis (esophageal cancer)',
                    'pmid' => '25848305', // 31 case-control studies, 8,510 cases
                    'population' => 'East Asian (30-40% heterozygous)',
                    'chip_coverage' => 'high',
                ],
            ],
            'phenotypes' => [
                'GG' => [
                    'phenotype' => ['ja' => '正常', 'en' => 'Normal'],
                    'description' => ['ja' => 'アセトアルデヒド代謝正常', 'en' => 'Normal acetaldehyde metabolism'],
                    'recommendation' => ['ja' => '適度な飲酒は可能だが節度を守る', 'en' => 'Moderate drinking possible, but maintain moderation'],
                ],
                'GA' => [
                    'phenotype' => ['ja' => 'フラッシャー（ヘテロ）', 'en' => 'Flusher (Heterozygous)'],
                    'description' => ['ja' => '飲酒で顔が赤くなりやすい。飲酒時の食道がんリスク上昇。', 'en' => 'Face flushes with alcohol. Increased esophageal cancer risk when drinking.'],
                    'recommendation' => ['ja' => '飲酒を控えめに。飲酒者は食道がんリスク約3倍（メタ解析OR=2.8-3.2）', 'en' => 'Limit alcohol. Drinkers have ~3x esophageal cancer risk (meta-analysis OR=2.8-3.2)'],
                    'warning' => ['ja' => '飲酒習慣がある場合、食道内視鏡検査推奨', 'en' => 'If drinking regularly, esophageal endoscopy recommended'],
                    'esophageal_cancer_or' => 2.8, // meta-analysis: 2.75-3.19
                ],
                'AA' => [
                    'phenotype' => ['ja' => '強フラッシャー（ホモ）', 'en' => 'Strong Flusher (Homozygous)'],
                    'description' => ['ja' => 'アルコールをほぼ代謝できない。少量でも強い不快感。', 'en' => 'Cannot metabolize alcohol. Strong discomfort even with small amounts.'],
                    'recommendation' => ['ja' => '飲酒は避けるべき。飲めないため食道がんリスクは低い（OR=0.4）', 'en' => 'Avoid alcohol. Paradoxically lower esophageal cancer risk (OR=0.4) due to alcohol avoidance'],
                    'esophageal_cancer_or' => 0.4, // protective because they don't drink
                ],
            ],
            'actionable' => true,
        ],

        'alcohol_dependence_risk' => [
            'name' => ['ja' => 'アルコール依存傾向', 'en' => 'Alcohol Dependence Risk'],
            'category' => 'metabolism',
            'snps' => [
                'rs1229984' => [
                    'gene' => 'ADH1B',
                    'protective_allele' => 'A',
                    'risk_allele' => 'G',
                    'source' => 'Li et al. 2011 Am J Hum Genet',
                    'pmid' => '22014159',
                    'population' => 'East Asian/European',
                    'chip_coverage' => 'high',
                ],
            ],
            'phenotypes' => [
                'AA' => [
                    'phenotype' => ['ja' => '保護型', 'en' => 'Protected'],
                    'description' => ['ja' => 'アルコールを速く代謝し不快感を感じやすい。依存リスク低。', 'en' => 'Metabolizes alcohol quickly, tends to feel unpleasant. Lower dependence risk.'],
                ],
                'AG' => [
                    'phenotype' => ['ja' => '中間', 'en' => 'Intermediate'],
                    'description' => ['ja' => '中程度の代謝速度', 'en' => 'Moderate metabolism speed'],
                ],
                'GG' => [
                    'phenotype' => ['ja' => '標準型', 'en' => 'Standard'],
                    'description' => ['ja' => '一般的なアルコール代謝。環境要因に注意。', 'en' => 'Typical alcohol metabolism. Environmental factors important.'],
                    'recommendation' => ['ja' => '家族歴がある場合は特に飲酒習慣に注意', 'en' => 'Be especially careful with drinking habits if family history exists'],
                ],
            ],
            'actionable' => true,
        ],

        'lactose_intolerance' => [
            'name' => ['ja' => '乳糖不耐症', 'en' => 'Lactose Intolerance'],
            'category' => 'nutrition',
            'snps' => [
                'rs4988235' => [
                    'gene' => 'MCM6/LCT',
                    'tolerance_allele' => 'A',
                    'intolerance_allele' => 'G',
                    'source' => 'Enattah et al. 2002 Nat Genet',
                    'pmid' => '11788828',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'phenotypes' => [
                'AA' => [
                    'phenotype' => ['ja' => '乳糖耐性', 'en' => 'Lactose Tolerant'],
                    'description' => ['ja' => '成人後もラクターゼ活性維持', 'en' => 'Maintains lactase activity into adulthood'],
                    'recommendation' => ['ja' => '乳製品摂取に問題なし', 'en' => 'No issues with dairy consumption'],
                ],
                'AG' => [
                    'phenotype' => ['ja' => '部分的耐性', 'en' => 'Partially Tolerant'],
                    'description' => ['ja' => 'ラクターゼ活性は中程度', 'en' => 'Moderate lactase activity'],
                    'recommendation' => ['ja' => '大量摂取で症状が出る可能性', 'en' => 'May have symptoms with large amounts'],
                ],
                'GG' => [
                    'phenotype' => ['ja' => '乳糖不耐症傾向', 'en' => 'Lactose Intolerant'],
                    'description' => ['ja' => '成人後にラクターゼ活性低下', 'en' => 'Lactase activity decreases in adulthood'],
                    'recommendation' => ['ja' => '乳製品で腹部不快感がある場合はラクトースフリー製品を', 'en' => 'Use lactose-free products if experiencing discomfort with dairy'],
                ],
            ],
            'actionable' => true,
        ],

        'bitter_taste_perception' => [
            'name' => ['ja' => '苦味感受性', 'en' => 'Bitter Taste Perception'],
            'category' => 'nutrition',
            'snps' => [
                'rs713598' => [
                    'gene' => 'TAS2R38',
                    'taster_allele' => 'G',
                    'non_taster_allele' => 'C',
                    'source' => 'Kim et al. 2003 Science',
                    'pmid' => '12595690',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
                'rs1726866' => [
                    'gene' => 'TAS2R38',
                    'taster_allele' => 'T',
                    'non_taster_allele' => 'C',
                    'source' => 'Kim et al. 2003 Science',
                    'pmid' => '12595690',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
            ],
            'phenotypes' => [
                'taster' => [
                    'phenotype' => ['ja' => 'スーパーテイスター', 'en' => 'Supertaster'],
                    'description' => ['ja' => '苦味に敏感。ブロッコリー、ケール等を苦く感じやすい。', 'en' => 'Sensitive to bitter tastes. May find broccoli, kale, etc. more bitter.'],
                    'recommendation' => ['ja' => '野菜は調理法を工夫（ローストで甘みを出す等）', 'en' => 'Try different cooking methods for vegetables (roasting brings out sweetness)'],
                ],
                'intermediate' => [
                    'phenotype' => ['ja' => '中間', 'en' => 'Intermediate'],
                    'description' => ['ja' => '中程度の苦味感受性', 'en' => 'Moderate bitter taste sensitivity'],
                ],
                'non_taster' => [
                    'phenotype' => ['ja' => 'ノンテイスター', 'en' => 'Non-taster'],
                    'description' => ['ja' => '苦味をあまり感じない。葉物野菜を食べやすい。', 'en' => 'Less sensitive to bitter tastes. Leafy greens easier to eat.'],
                ],
            ],
            'actionable' => true,
        ],

        'vitamin_d_levels' => [
            'name' => ['ja' => 'ビタミンD代謝', 'en' => 'Vitamin D Metabolism'],
            'category' => 'nutrition',
            'snps' => [
                'rs2282679' => [
                    'gene' => 'GC',
                    'risk_allele' => 'G',
                    'odds_ratio' => 1.6,
                    'source' => 'Wang et al. 2010 Lancet',
                    'pmid' => '20541252',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs12785878' => [
                    'gene' => 'DHCR7',
                    'risk_allele' => 'T',
                    'odds_ratio' => 1.4,
                    'source' => 'Wang et al. 2010 Lancet',
                    'pmid' => '20541252',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs10741657' => [
                    'gene' => 'CYP2R1',
                    'risk_allele' => 'A',
                    'odds_ratio' => 1.3,
                    'source' => 'Wang et al. 2010 Lancet',
                    'pmid' => '20541252',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'risk_levels' => [
                'high_risk' => [
                    'description' => ['ja' => 'ビタミンD不足になりやすい遺伝的傾向', 'en' => 'Genetic tendency toward vitamin D deficiency'],
                    'recommendation' => ['ja' => '積極的な日光浴、ビタミンDサプリ（1000-2000IU/日）、定期的な血中濃度測定', 'en' => 'Active sun exposure, vitamin D supplements (1000-2000IU/day), regular blood level monitoring'],
                ],
                'moderate_risk' => [
                    'description' => ['ja' => '中程度のビタミンD不足リスク', 'en' => 'Moderate risk of vitamin D deficiency'],
                    'recommendation' => ['ja' => '日光浴とビタミンD含有食品の摂取', 'en' => 'Sun exposure and vitamin D-rich foods'],
                ],
                'low_risk' => [
                    'description' => ['ja' => 'ビタミンD代謝は標準的', 'en' => 'Standard vitamin D metabolism'],
                    'recommendation' => ['ja' => '通常の日光浴で十分', 'en' => 'Normal sun exposure is sufficient'],
                ],
            ],
            'actionable' => true,
        ],

        'folate_metabolism' => [
            'name' => ['ja' => '葉酸代謝', 'en' => 'Folate Metabolism'],
            'category' => 'nutrition',
            'snps' => [
                'rs1801133' => [
                    'gene' => 'MTHFR',
                    'variant_allele' => 'A',
                    'effect' => 'C677T',
                    'activity_reduction' => 0.35, // TT: 35% residual activity (65% reduced)
                    'source' => 'Frosst et al. 1995 Nat Genet',
                    'pmid' => '7647779',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
                'rs1801131' => [
                    'gene' => 'MTHFR',
                    'variant_allele' => 'G',
                    'effect' => 'A1298C',
                    'activity_reduction' => 0.20,
                    'source' => 'van der Put et al. 1998 Am J Hum Genet',
                    'pmid' => '9758618',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
            ],
            'phenotypes' => [
                'normal' => [
                    'genotype' => 'CC/AA',
                    'description' => ['ja' => '葉酸代謝正常', 'en' => 'Normal folate metabolism'],
                ],
                'moderate' => [
                    'genotype' => 'CT/AC or CC/AC',
                    'description' => ['ja' => '軽度低下（活性60-70%）', 'en' => 'Mildly reduced (60-70% activity)'],
                    'recommendation' => ['ja' => '葉酸豊富な食品を意識的に摂取', 'en' => 'Consciously consume folate-rich foods'],
                ],
                'reduced' => [
                    'genotype' => 'TT or compound',
                    'description' => ['ja' => '顕著な低下（活性35%程度）', 'en' => 'Significantly reduced (~35% activity)'],
                    'recommendation' => ['ja' => 'メチル葉酸（5-MTHF）サプリを推奨、特に妊娠計画時は医師に相談', 'en' => 'Methylfolate (5-MTHF) supplements recommended, consult physician especially when planning pregnancy'],
                ],
            ],
            'actionable' => true,
            'clinical_notes' => [
                'ja' => 'MTHFR変異はホモシステイン上昇と関連。心血管リスク評価時に考慮。',
                'en' => 'MTHFR variants associated with elevated homocysteine. Consider in cardiovascular risk assessment.',
            ],
        ],

        // ===== Exercise/Fitness =====
        'muscle_fiber_type' => [
            'name' => ['ja' => '筋繊維タイプ', 'en' => 'Muscle Fiber Type'],
            'category' => 'fitness',
            'snps' => [
                'rs1815739' => [
                    'gene' => 'ACTN3',
                    'power_allele' => 'C',
                    'endurance_allele' => 'T',
                    'source' => 'Yang et al. 2003 Am J Hum Genet',
                    'pmid' => '12879365',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
            ],
            'phenotypes' => [
                'CC' => [
                    'phenotype' => ['ja' => 'パワー型', 'en' => 'Power Type'],
                    'description' => ['ja' => '速筋繊維優位。スプリント・パワー系競技に有利。', 'en' => 'Fast-twitch muscle fibers dominant. Advantageous for sprint/power sports.'],
                    'recommendation' => ['ja' => '短距離走、ウェイトリフティング、瞬発系スポーツが向いている', 'en' => 'Suited for sprinting, weightlifting, explosive sports'],
                ],
                'CT' => [
                    'phenotype' => ['ja' => 'バランス型', 'en' => 'Balanced Type'],
                    'description' => ['ja' => '速筋・遅筋のバランス型。多様なスポーツに適応。', 'en' => 'Balance of fast and slow twitch fibers. Adaptable to various sports.'],
                    'recommendation' => ['ja' => '幅広いスポーツに対応可能', 'en' => 'Capable of adapting to a wide range of sports'],
                ],
                'TT' => [
                    'phenotype' => ['ja' => '持久型', 'en' => 'Endurance Type'],
                    'description' => ['ja' => '遅筋繊維優位。持久系競技に有利。α-アクチニン3欠損。', 'en' => 'Slow-twitch fibers dominant. Advantageous for endurance sports. α-actinin-3 deficient.'],
                    'recommendation' => ['ja' => 'マラソン、サイクリング、トライアスロン等の持久系が向いている', 'en' => 'Suited for marathon, cycling, triathlon and other endurance sports'],
                ],
            ],
            'actionable' => true,
        ],

        'aerobic_capacity' => [
            'name' => ['ja' => '有酸素能力', 'en' => 'Aerobic Capacity'],
            'category' => 'fitness',
            'snps' => [
                'rs8192678' => [
                    'gene' => 'PPARGC1A',
                    'enhanced_allele' => 'A',
                    'source' => 'Lucia et al. 2005 Eur J Appl Physiol',
                    'pmid' => '15726412',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'phenotypes' => [
                'AA' => [
                    'phenotype' => ['ja' => '高い有酸素能力', 'en' => 'High Aerobic Capacity'],
                    'description' => ['ja' => 'PGC-1α発現増加。ミトコンドリア機能良好。', 'en' => 'Increased PGC-1α expression. Good mitochondrial function.'],
                    'recommendation' => ['ja' => '持久系トレーニングで効果が出やすい', 'en' => 'Likely to see good results from endurance training'],
                ],
                'AG' => [
                    'phenotype' => ['ja' => '中程度', 'en' => 'Moderate'],
                    'description' => ['ja' => '標準的な有酸素能力', 'en' => 'Standard aerobic capacity'],
                ],
                'GG' => [
                    'phenotype' => ['ja' => '標準', 'en' => 'Standard'],
                    'description' => ['ja' => '有酸素能力の遺伝的優位性なし', 'en' => 'No genetic advantage for aerobic capacity'],
                    'recommendation' => ['ja' => 'トレーニングでの改善は可能、より努力が必要かも', 'en' => 'Improvement through training is possible, may require more effort'],
                ],
            ],
            'actionable' => true,
        ],

        'injury_risk' => [
            'name' => ['ja' => '腱・靭帯損傷リスク', 'en' => 'Tendon/Ligament Injury Risk'],
            'category' => 'fitness',
            'snps' => [
                'rs12722' => [
                    'gene' => 'COL5A1',
                    'risk_allele' => 'T',
                    'source' => 'Mokone et al. 2006 Br J Sports Med',
                    'pmid' => '16505074',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
                'rs1800012' => [
                    'gene' => 'COL1A1',
                    'risk_allele' => 'T',
                    'source' => 'Khoschnau et al. 2008 Br J Sports Med',
                    'pmid' => '18445820',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'risk_levels' => [
                'elevated' => [
                    'description' => ['ja' => 'コラーゲン構造に影響。腱・靭帯損傷リスク上昇。', 'en' => 'Affects collagen structure. Elevated tendon/ligament injury risk.'],
                    'recommendation' => ['ja' => '十分なウォームアップ、コラーゲン・ビタミンC摂取、急激な運動量増加を避ける', 'en' => 'Thorough warm-up, collagen + vitamin C intake, avoid sudden increases in exercise volume'],
                ],
                'moderate' => [
                    'description' => ['ja' => '中程度のリスク', 'en' => 'Moderate risk'],
                ],
                'standard' => [
                    'description' => ['ja' => '標準的なリスク', 'en' => 'Standard risk'],
                ],
            ],
            'actionable' => true,
        ],

        // ===== Sleep/Circadian Rhythm =====
        'chronotype' => [
            'name' => ['ja' => 'クロノタイプ（朝型/夜型）', 'en' => 'Chronotype (Morning/Evening)'],
            'category' => 'sleep',
            'snps' => [
                'rs1801260' => [
                    'gene' => 'CLOCK',
                    'evening_allele' => 'C',
                    'source' => 'Katzenberg et al. 1998 Sleep',
                    'pmid' => '9779520',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'high',
                ],
                'rs57875989' => [
                    'gene' => 'PER2',
                    'morning_allele' => 'del',
                    'source' => 'Toh et al. 2001 Science',
                    'pmid' => '11232563',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'medium',
                ],
            ],
            'phenotypes' => [
                'morning' => [
                    'phenotype' => ['ja' => '朝型', 'en' => 'Morning Type'],
                    'description' => ['ja' => '早起きが得意、朝に集中力が高い', 'en' => 'Good at waking early, high concentration in morning'],
                    'recommendation' => ['ja' => '重要な仕事は午前中に、就寝は22-23時推奨', 'en' => 'Schedule important work in the morning, bedtime 10-11pm recommended'],
                ],
                'intermediate' => [
                    'phenotype' => ['ja' => '中間型', 'en' => 'Intermediate Type'],
                    'description' => ['ja' => '柔軟に適応可能', 'en' => 'Can adapt flexibly'],
                ],
                'evening' => [
                    'phenotype' => ['ja' => '夜型', 'en' => 'Evening Type'],
                    'description' => ['ja' => '夜に活動的、朝が苦手', 'en' => 'Active at night, struggles in morning'],
                    'recommendation' => ['ja' => '光療法で朝型シフト可能、無理な早起きはストレスに', 'en' => 'Can shift to morning type with light therapy, forced early rising causes stress'],
                ],
            ],
            'actionable' => true,
        ],

        'sleep_duration' => [
            'name' => ['ja' => '必要睡眠時間', 'en' => 'Sleep Duration Need'],
            'category' => 'sleep',
            'snps' => [
                'rs121912617' => [
                    'gene' => 'DEC2',
                    'short_sleep_allele' => 'G',
                    'source' => 'He et al. 2009 Science',
                    'pmid' => '19679812',
                    'population' => 'Multi-ethnic',
                    'chip_coverage' => 'low',
                    'note' => 'Very rare variant',
                ],
                'rs1823125' => [
                    'gene' => 'PAX8',
                    'long_sleep_allele' => 'G',
                    'source' => 'Gottlieb et al. 2015 Mol Psychiatry',
                    'pmid' => '25600114',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'general_note' => [
                'ja' => 'ほとんどの人は7-9時間の睡眠が必要。短時間睡眠で健康を維持できる遺伝子変異は極めて稀。',
                'en' => 'Most people need 7-9 hours of sleep. Genetic variants allowing healthy short sleep are extremely rare.',
            ],
            'actionable' => true,
        ],

        // ===== Appearance/Physical Characteristics =====
        'baldness_risk' => [
            'name' => ['ja' => '男性型脱毛症リスク', 'en' => 'Male Pattern Baldness Risk'],
            'category' => 'physical',
            'sex_specific' => 'male',
            'snps' => [
                'rs2180439' => [
                    'gene' => '20p11',
                    'risk_allele' => 'T',
                    'odds_ratio' => 1.82, // per-allele (Hillmer 2008)
                    'source' => 'Hillmer et al. 2008 Nat Genet',
                    'pmid' => '18849991',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs6152' => [
                    'gene' => 'AR',
                    'risk_allele' => 'G',
                    'odds_ratio' => 2.1,
                    'source' => 'Prodi et al. 2008 Hum Genet',
                    'pmid' => '18350319',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'risk_levels' => [
                'high' => [
                    'description' => ['ja' => '若年性脱毛リスクが高い', 'en' => 'High risk of early onset baldness'],
                    'recommendation' => ['ja' => '早期からのミノキシジル・フィナステリド検討、医師相談', 'en' => 'Consider early minoxidil/finasteride, consult physician'],
                ],
                'moderate' => [
                    'description' => ['ja' => '中程度のリスク', 'en' => 'Moderate risk'],
                ],
                'low' => [
                    'description' => ['ja' => '遺伝的リスクは低め', 'en' => 'Lower genetic risk'],
                ],
            ],
            'actionable' => true,
        ],

        'freckles' => [
            'name' => ['ja' => 'そばかす傾向', 'en' => 'Freckling Tendency'],
            'category' => 'physical',
            'snps' => [
                'rs1805007' => [
                    'gene' => 'MC1R',
                    'freckle_allele' => 'T',
                    'source' => 'Bastiaens et al. 2001 J Invest Dermatol',
                    'pmid' => '11359134',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
                'rs1805008' => [
                    'gene' => 'MC1R',
                    'freckle_allele' => 'T',
                    'source' => 'Bastiaens et al. 2001 J Invest Dermatol',
                    'pmid' => '11359134',
                    'population' => 'European',
                    'chip_coverage' => 'high',
                ],
            ],
            'phenotypes' => [
                'likely' => [
                    'phenotype' => ['ja' => 'そばかすができやすい', 'en' => 'Likely to have freckles'],
                    'description' => ['ja' => 'MC1R変異により日光でそばかすができやすい。皮膚がんリスクも上昇。', 'en' => 'MC1R variants make freckles more likely with sun exposure. Also increased skin cancer risk.'],
                    'recommendation' => ['ja' => '日焼け止め必須、定期的な皮膚科検診推奨', 'en' => 'Sunscreen essential, regular dermatology check-ups recommended'],
                ],
                'unlikely' => [
                    'phenotype' => ['ja' => 'そばかすができにくい', 'en' => 'Unlikely to have freckles'],
                ],
            ],
            'actionable' => true,
        ],
    ];

    /**
     * Determine metabolic phenotype from Activity Score
     *
     * @param string $gene Gene name
     * @param float $score Activity Score (0.0-4.0+)
     * @return string Phenotype (PM/IM/NM/RM/UM)
     */
    public static function scoreToPhenotype(string $gene, float $score): string
    {
        // CYP2D6 criteria (CPIC)
        if ($gene === 'CYP2D6') {
            if ($score === 0.0) return 'PM';
            if ($score <= 1.0) return 'IM';
            if ($score <= 2.0) return 'NM';
            return 'UM';
        }

        // CYP2C19 criteria
        if ($gene === 'CYP2C19') {
            if ($score === 0.0) return 'PM';
            if ($score < 1.0) return 'IM';
            if ($score === 1.0) return 'NM';
            if ($score < 2.0) return 'RM';
            return 'UM';
        }

        // TPMT, DPYD criteria
        if ($gene === 'TPMT' || $gene === 'DPYD') {
            if ($score === 0.0) return 'PM';
            if ($score < 2.0) return 'IM';
            return 'NM';
        }

        // Default
        if ($score === 0.0) return 'PM';
        if ($score < 1.0) return 'IM';
        if ($score <= 2.0) return 'NM';
        return 'UM';
    }

    /**
     * Calculate Activity Score from two alleles
     *
     * @param string $gene Gene name
     * @param string $allele1 Allele 1
     * @param string $allele2 Allele 2
     * @return float Activity Score
     */
    public static function calculateActivityScore(string $gene, string $allele1, string $allele2): float
    {
        $alleles = self::ALLELES[$gene] ?? [];

        $score1 = $alleles[$allele1]['score'] ?? 1.0;
        $score2 = $alleles[$allele2]['score'] ?? 1.0;

        return $score1 + $score2;
    }

    /**
     * X-linked gene (G6PD etc.) phenotype determination
     *
     * Male (XY): Hemizygous - determined by 1 allele only
     * Female (XX): Homo/hetero - determined by 2 alleles (X-inactivation considered)
     *
     * @param string $gene Gene name
     * @param string $sex 'male' or 'female'
     * @param string $allele1 Allele 1
     * @param string|null $allele2 Allele 2 (null for males)
     * @return array ['phenotype' => string, 'class' => string, 'risk' => string]
     */
    public static function determineXLinkedPhenotype(
        string $gene,
        string $sex,
        string $allele1,
        ?string $allele2 = null
    ): array {
        $alleles = self::ALLELES[$gene] ?? [];
        $allele1Data = $alleles[$allele1] ?? ['function' => 'normal', 'class' => 'IV'];
        $allele2Data = $allele2 ? ($alleles[$allele2] ?? ['function' => 'normal', 'class' => 'IV']) : null;

        // G6PD-specific determination (WHO classification compliant)
        if ($gene === 'G6PD') {
            return self::determineG6PDPhenotype($sex, $allele1Data, $allele2Data);
        }

        // Generic X-linked determination
        if ($sex === 'male') {
            // Male hemizygous: determined by 1 allele
            return [
                'phenotype' => $allele1Data['function'] === 'normal' ? 'NM' : 'PM',
                'risk' => $allele1Data['function'] === 'normal' ? 'none' : 'high',
            ];
        }

        // Female: 2-allele evaluation
        $func1 = $allele1Data['function'] ?? 'normal';
        $func2 = $allele2Data['function'] ?? 'normal';

        if ($func1 === 'normal' && $func2 === 'normal') {
            return ['phenotype' => 'NM', 'risk' => 'none'];
        }
        if ($func1 !== 'normal' && $func2 !== 'normal') {
            return ['phenotype' => 'PM', 'risk' => 'high'];
        }
        // Hetero (intermediate due to random X-inactivation)
        return ['phenotype' => 'IM', 'risk' => 'moderate'];
    }

    /**
     * G6PD phenotype determination (WHO classification compliant)
     *
     * Class I:   Severe deficiency (chronic hemolysis)
     * Class II:  Severe deficiency (<10% activity) — Mediterranean, Canton
     * Class III: Moderate deficiency (10-60% activity) — A-, Mahidol
     * Class IV:  Normal (60-150% activity) — B, A
     * Class V:   Increased (>150% activity)
     *
     * @param string $sex 'male' or 'female'
     * @param array $allele1Data Allele 1 data
     * @param array|null $allele2Data Allele 2 data
     * @return array
     */
    private static function determineG6PDPhenotype(
        string $sex,
        array $allele1Data,
        ?array $allele2Data
    ): array {
        $class1 = $allele1Data['class'] ?? 'IV';
        $func1 = $allele1Data['function'] ?? 'normal';

        if ($sex === 'male') {
            // Male hemizygous: fully determined by single allele
            if ($class1 === 'II' || $func1 === 'poor') {
                return [
                    'phenotype' => 'deficient',
                    'class' => $class1,
                    'risk' => 'high',
                    'desc' => ['ja' => '重度G6PD欠損症', 'en' => 'Severe G6PD deficiency'],
                ];
            }
            if ($class1 === 'III' || $func1 === 'decreased') {
                return [
                    'phenotype' => 'deficient',
                    'class' => $class1,
                    'risk' => 'moderate',
                    'desc' => ['ja' => '中等度G6PD欠損症', 'en' => 'Moderate G6PD deficiency'],
                ];
            }
            return [
                'phenotype' => 'normal',
                'class' => 'IV',
                'risk' => 'none',
                'desc' => ['ja' => '正常', 'en' => 'Normal'],
            ];
        }

        // Female: 2-allele evaluation (considering X-inactivation mosaicism)
        $class2 = $allele2Data['class'] ?? 'IV';
        $func2 = $allele2Data['function'] ?? 'normal';

        // Both normal
        if ($func1 === 'normal' && $func2 === 'normal') {
            return [
                'phenotype' => 'normal',
                'class' => 'IV',
                'risk' => 'none',
                'desc' => ['ja' => '正常', 'en' => 'Normal'],
            ];
        }

        // Both deficient (homozygous)
        if ($func1 !== 'normal' && $func2 !== 'normal') {
            $worstClass = min((int)$class1, (int)$class2);
            return [
                'phenotype' => 'deficient',
                'class' => (string)$worstClass,
                'risk' => $worstClass <= 2 ? 'high' : 'moderate',
                'desc' => ['ja' => 'G6PD欠損症（ホモ）', 'en' => 'G6PD deficiency (homozygous)'],
            ];
        }

        // Heterozygous (30-80% activity due to random X-inactivation)
        // Risk depends on severity of mutant allele
        $mutantClass = $func1 !== 'normal' ? $class1 : $class2;
        return [
            'phenotype' => 'variable',
            'class' => $mutantClass,
            'risk' => 'variable',
            'desc' => [
                'ja' => 'G6PD保因者（活性30-80%、変動あり）',
                'en' => 'G6PD carrier (30-80% activity, variable)'
            ],
            'note' => [
                'ja' => 'ランダムX不活性化により個人差あり。酸化ストレス薬に注意。',
                'en' => 'Variable due to random X-inactivation. Caution with oxidative drugs.'
            ],
        ];
    }

    /**
     * Get drug recommendation
     *
     * @param string $drug Drug name
     * @param string $phenotype Phenotype
     * @param string $lang Language
     * @return array Recommendation information
     */
    public static function getRecommendation(string $drug, string $phenotype, string $lang = 'ja'): array
    {
        $recs = self::RECOMMENDATIONS[$drug] ?? [];
        $rec = $recs[$phenotype] ?? $recs['NM'] ?? ['action' => 'standard'];

        // Language support
        if (isset($rec['reason'])) {
            $rec['reason'] = $rec['reason'][$lang] ?? $rec['reason']['en'] ?? '';
        }
        if (isset($rec['alternative'])) {
            $rec['alternative'] = $rec['alternative'][$lang] ?? $rec['alternative']['en'] ?? '';
        }

        return $rec;
    }

    /**
     * Auto-detect chip version from RAW data
     *
     * @param array $rawData rsID => genotype map
     * @return array ['version' => string, 'confidence' => float, 'details' => array]
     */
    public static function detectChipVersion(array $rawData): array
    {
        $scores = [];
        $details = [];
        $rawRsids = array_keys($rawData);

        foreach (self::CHIP_VERSIONS as $version => $config) {
            if ($version === 'unknown') continue;

            $signatureHits = 0;
            $signatureTotal = count($config['signature_snps']);
            $missingHits = 0;
            $missingTotal = count($config['missing_snps']);

            // Check for presence of signature SNPs
            foreach ($config['signature_snps'] as $rsid) {
                if (isset($rawData[$rsid])) {
                    $signatureHits++;
                }
            }

            // Check for missing SNPs (absence = characteristic of this version)
            foreach ($config['missing_snps'] as $rsid) {
                if (!isset($rawData[$rsid])) {
                    $missingHits++;
                }
            }

            // Score calculation (signature match rate + missing pattern match rate)
            $signatureScore = $signatureTotal > 0 ? $signatureHits / $signatureTotal : 0;
            $missingScore = $missingTotal > 0 ? $missingHits / $missingTotal : 1;
            $totalScore = ($signatureScore * 0.7) + ($missingScore * 0.3);

            $scores[$version] = $totalScore;
            $details[$version] = [
                'signature_matched' => $signatureHits . '/' . $signatureTotal,
                'missing_pattern' => $missingHits . '/' . $missingTotal,
                'score' => round($totalScore, 3),
            ];
        }

        // Select version with highest score
        arsort($scores);
        $bestVersion = key($scores);
        $bestScore = $scores[$bestVersion];

        // Mark as unknown if confidence is low
        if ($bestScore < 0.5) {
            $bestVersion = 'unknown';
            $bestScore = 0.0;
        }

        return [
            'version' => $bestVersion,
            'confidence' => round($bestScore, 3),
            'platform' => self::CHIP_VERSIONS[$bestVersion]['platform'] ?? '',
            'year_range' => self::CHIP_VERSIONS[$bestVersion]['year_range'] ?? '',
            'details' => $details,
        ];
    }

    /**
     * Infer missing rsIDs using Proxy SNPs
     *
     * @param array $rawData rsID => genotype map
     * @param float $minR2 Minimum r² threshold (default 0.8)
     * @param string|null $population Population filter (null=ALL priority)
     * @return array ['resolved' => array, 'stats' => array]
     */
    public static function resolveProxySNPs(array $rawData, float $minR2 = 0.8, ?string $population = null): array
    {
        $resolved = $rawData;  // Copy original data
        $stats = [
            'original_count' => count($rawData),
            'proxy_used' => [],
            'proxy_failed' => [],
        ];

        // Check each Proxy SNP rule
        foreach (self::PROXY_SNPS as $proxyRule) {
            $target = $proxyRule['target'];
            $proxy = $proxyRule['proxy'];
            $r2 = $proxyRule['r2'];
            $pop = $proxyRule['population'];
            $phaseRule = $proxyRule['phase_rule'];

            // Skip if target already exists
            if (isset($resolved[$target])) {
                continue;
            }

            // r² threshold check
            if ($r2 < $minR2) {
                continue;
            }

            // Population filter (if specified)
            if ($population !== null && $pop !== 'ALL' && $pop !== $population) {
                continue;
            }

            // Check if Proxy SNP exists
            if (!isset($rawData[$proxy])) {
                $stats['proxy_failed'][] = [
                    'target' => $target,
                    'proxy' => $proxy,
                    'reason' => 'proxy_not_found',
                ];
                continue;
            }

            // Estimate from Proxy value
            $proxyGenotype = $rawData[$proxy];
            $inferredGenotype = $proxyGenotype;

            // Flip if opposite phase (simple implementation)
            if ($phaseRule === 'opposite') {
                // A/T, C/G complement (simple version)
                $complement = ['A' => 'T', 'T' => 'A', 'C' => 'G', 'G' => 'C'];
                $inferredGenotype = '';
                for ($i = 0; $i < strlen($proxyGenotype); $i++) {
                    $base = $proxyGenotype[$i];
                    $inferredGenotype .= $complement[$base] ?? $base;
                }
            }

            // Add estimated result
            $resolved[$target] = $inferredGenotype;
            $stats['proxy_used'][] = [
                'target' => $target,
                'proxy' => $proxy,
                'r2' => $r2,
                'population' => $pop,
                'inferred' => $inferredGenotype,
                'gene' => $proxyRule['gene'],
                'allele' => $proxyRule['allele'],
            ];
        }

        $stats['resolved_count'] = count($resolved);
        $stats['proxy_additions'] = count($stats['proxy_used']);

        return [
            'resolved' => $resolved,
            'stats' => $stats,
        ];
    }

    /**
     * Parse 23andMe RAW data file
     *
     * @param string $content RAW file content
     * @return array ['data' => array, 'header' => array, 'chip_version' => array]
     */
    public static function parseRawFile(string $content): array
    {
        $lines = explode("\n", $content);
        $rawData = [];
        $headerInfo = [
            'format' => 'unknown',
            'generated_date' => null,
            'build' => null,
            'total_snps' => 0,
        ];

        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) continue;

            // Parse header line
            if (strpos($line, '#') === 0) {
                // Detect date
                if (preg_match('/generated:\s*(.+)/i', $line, $m)) {
                    $headerInfo['generated_date'] = trim($m[1]);
                }
                // Detect build
                if (preg_match('/build\s*(\d+)/i', $line, $m)) {
                    $headerInfo['build'] = 'GRCh' . $m[1];
                }
                // Detect format
                if (str_contains($line, '23andMe')) {
                    $headerInfo['format'] = '23andMe';
                } elseif (str_contains($line, 'AncestryDNA')) {
                    $headerInfo['format'] = 'AncestryDNA';
                }
                continue;
            }

            // Parse data line (tab-separated)
            $parts = preg_split('/\s+/', $line);
            if (count($parts) >= 4) {
                // 23andMe format: rsid, chromosome, position, genotype
                $rsid = $parts[0];
                $genotype = $parts[3];

                // rsID format check
                if (strpos($rsid, 'rs') === 0 && strlen($genotype) >= 1) {
                    // Skip No Call (--)
                    if ($genotype !== '--' && $genotype !== '00') {
                        $rawData[$rsid] = strtoupper($genotype);
                        $headerInfo['total_snps']++;
                    }
                }
            }
        }

        // Auto-detect chip version
        $chipVersion = self::detectChipVersion($rawData);

        return [
            'data' => $rawData,
            'header' => $headerInfo,
            'chip_version' => $chipVersion,
        ];
    }

    /**
     * Extended analysis: Complete analysis including Proxy SNP resolution
     *
     * @param array $rawData rsID => genotype map
     * @param bool $useProxy Whether to use Proxy SNPs
     * @param float $minR2 Minimum r² threshold
     * @param string|null $sex Sex ('male'/'female') - required for X-linked gene determination
     * @return array Analysis results + metadata
     */
    public static function analyzeWithProxy(
        array $rawData,
        bool $useProxy = true,
        float $minR2 = 0.8,
        ?string $sex = null
    ): array {
        // Detect chip version
        $chipVersion = self::detectChipVersion($rawData);

        // Proxy SNP resolution
        $proxyResult = ['resolved' => $rawData, 'stats' => ['proxy_used' => []]];
        if ($useProxy) {
            $proxyResult = self::resolveProxySNPs($rawData, $minR2);
        }

        // Execute analysis (with sex parameter)
        $pgxProfile = self::parseRawData($proxyResult['resolved'], $sex);

        return [
            'profile' => $pgxProfile,
            'chip_version' => $chipVersion,
            'proxy_stats' => $proxyResult['stats'],
            'analysis_meta' => [
                'input_snps' => count($rawData),
                'resolved_snps' => count($proxyResult['resolved']),
                'proxy_enabled' => $useProxy,
                'min_r2_threshold' => $minR2,
                'sex' => $sex,
            ],
        ];
    }

    /**
     * Analyze genotypes from 23andMe RAW data
     *
     * @param array $rawData rsID => genotype map
     * @param string|null $sex Sex ('male'/'female') - required for X-linked gene determination
     * @return array gene => [allele1, allele2, phenotype, score]
     */
    public static function parseRawData(array $rawData, ?string $sex = null): array
    {
        $results = [];
        $geneVariants = [];

        // Scan SNP markers
        foreach (self::SNP_MARKERS as $rsid => $marker) {
            if (!isset($rawData[$rsid])) continue;

            $genotype = $rawData[$rsid];
            $gene = $marker['gene'];
            $allele = $marker['allele'];
            $ref = $marker['ref'];
            $alt = $marker['alt'];

            if (!isset($geneVariants[$gene])) {
                $geneVariants[$gene] = ['variants' => [], 'wild_type' => true];
            }

            // Hetero/Homo determination
            if ($genotype === $alt . $alt) {
                // Homozygous variant
                $geneVariants[$gene]['variants'][] = ['allele' => $allele, 'copies' => 2];
                $geneVariants[$gene]['wild_type'] = false;
            } elseif (str_contains($genotype, $alt)) {
                // Heterozygous
                $geneVariants[$gene]['variants'][] = ['allele' => $allele, 'copies' => 1];
                $geneVariants[$gene]['wild_type'] = false;
            }
        }

        // Allele call and score calculation
        foreach ($geneVariants as $gene => $data) {
            $allele1 = '*1'; // Default is wild type
            $allele2 = '*1';

            $variants = $data['variants'];
            if (count($variants) >= 1) {
                $allele1 = $variants[0]['allele'];
                if ($variants[0]['copies'] === 2) {
                    $allele2 = $variants[0]['allele'];
                } elseif (count($variants) >= 2) {
                    $allele2 = $variants[1]['allele'];
                }
            }

            // Special handling for X-linked genes
            $geneInfo = self::GENES[$gene] ?? [];
            $isSexLinked = $geneInfo['sex_linked'] ?? false;

            if ($isSexLinked && $sex !== null) {
                // X-linked gene: sex-dependent determination
                $xLinkedResult = self::determineXLinkedPhenotype(
                    $gene,
                    $sex,
                    $allele1,
                    $sex === 'female' ? $allele2 : null
                );

                $results[$gene] = [
                    'allele1' => $allele1,
                    'allele2' => $sex === 'male' ? null : $allele2,
                    'diplotype' => $sex === 'male'
                        ? $allele1 . '/Y'
                        : $allele1 . '/' . $allele2,
                    'sex_linked' => true,
                    'sex' => $sex,
                    'phenotype' => $xLinkedResult['phenotype'],
                    'risk' => $xLinkedResult['risk'],
                    'class' => $xLinkedResult['class'] ?? null,
                    'desc' => $xLinkedResult['desc'] ?? null,
                    'note' => $xLinkedResult['note'] ?? null,
                ];
            } else {
                // Autosomal gene: traditional score-based determination
                $score = self::calculateActivityScore($gene, $allele1, $allele2);
                $phenotype = self::scoreToPhenotype($gene, $score);

                $results[$gene] = [
                    'allele1' => $allele1,
                    'allele2' => $allele2,
                    'diplotype' => $allele1 . '/' . $allele2,
                    'score' => $score,
                    'phenotype' => $phenotype,
                ];

                // X-linked gene with unknown sex: warning flag
                if ($isSexLinked) {
                    $results[$gene]['warning'] = 'sex_required_for_accurate_assessment';
                }
            }
        }

        return $results;
    }

    /**
     * Generate recommendations for all drugs
     *
     * @param array $pgxProfile Result of parseRawData()
     * @param string $lang Language
     * @return array List of recommendations by drug
     */
    public static function generateReport(array $pgxProfile, string $lang = 'ja'): array
    {
        $report = [
            'avoid' => [],      // Contraindicated
            'caution' => [],    // Caution
            'standard' => [],   // Standard
        ];

        foreach (self::DRUGS as $drugId => $drug) {
            $genes = is_array($drug['gene']) ? $drug['gene'] : [$drug['gene']];

            foreach ($genes as $gene) {
                if (!isset($pgxProfile[$gene])) continue;

                $phenotype = $pgxProfile[$gene]['phenotype'];
                $rec = self::getRecommendation($drugId, $phenotype, $lang);

                $entry = [
                    'drug' => $drug['name'][$lang] ?? $drug['name']['en'],
                    'gene' => $gene,
                    'phenotype' => $phenotype,
                    'phenotype_name' => self::PHENOTYPES[$phenotype][$lang] ?? $phenotype,
                    'recommendation' => $rec,
                ];

                if ($rec['action'] === 'avoid') {
                    $report['avoid'][] = $entry;
                } elseif (in_array($rec['action'], ['reduce', 'increase', 'alternative', 'monitor'], true)) {
                    $report['caution'][] = $entry;
                } else {
                    $report['standard'][] = $entry;
                }
            }
        }

        return $report;
    }

    // =========================================================================
    // SECTION: Disease Risk Analysis Methods
    // =========================================================================

    /**
     * Determine APOE haplotype (ε2/ε3/ε4)
     */
    public static function determineAPOEHaplotype(string $rs429358, string $rs7412): string
    {
        $alleles = [];
        $g1 = str_split($rs429358);
        $g2 = str_split($rs7412);

        for ($i = 0; $i < 2; $i++) {
            $a1 = $g1[$i] ?? 'T';
            $a2 = $g2[$i] ?? 'C';

            if ($a1 === 'C' && $a2 === 'C') {
                $alleles[] = 'ε4';
            } elseif ($a1 === 'T' && $a2 === 'T') {
                $alleles[] = 'ε2';
            } else {
                $alleles[] = 'ε3';
            }
        }

        sort($alleles);
        return implode('/', $alleles);
    }

    /**
     * Analyze disease risk
     */
    public static function analyzeDiseaseRisk(array $rawData, ?string $sex = null, string $lang = 'ja'): array
    {
        $results = [];

        foreach (self::DISEASE_MARKERS as $diseaseId => $disease) {
            if (isset($disease['sex_specific']) && $sex !== null) {
                if ($disease['sex_specific'] !== $sex) {
                    continue;
                }
            }

            $snpResults = [];
            $riskScore = 0.0;
            $snpsFound = 0;
            $snpsTotal = count($disease['snps']);

            foreach ($disease['snps'] as $rsId => $snpInfo) {
                if (!isset($rawData[$rsId])) continue;

                $genotype = $rawData[$rsId];
                $snpsFound++;

                $riskAllele = $snpInfo['risk_allele'] ?? null;
                $riskCount = $riskAllele !== null ? substr_count($genotype, $riskAllele) : 0;

                $or = $snpInfo['odds_ratio'] ?? 1.0;
                $orHom = $snpInfo['odds_ratio_hom'] ?? ($or * $or);

                $snpRisk = $riskCount === 2 ? log($orHom) : ($riskCount === 1 ? log($or) : 0.0);
                $riskScore += $snpRisk;

                $snpResults[$rsId] = [
                    'genotype' => $genotype,
                    'risk_allele' => $riskAllele,
                    'risk_count' => $riskCount,
                    'gene' => $snpInfo['gene'],
                    'odds_ratio' => $riskCount === 2 ? $orHom : ($riskCount === 1 ? $or : 1.0),
                ];
            }

            if ($snpsFound === 0) continue;

            // APOE special handling
            $haplotype = null;
            if ($diseaseId === 'alzheimer' && isset($rawData['rs429358'], $rawData['rs7412'])) {
                $haplotype = self::determineAPOEHaplotype($rawData['rs429358'], $rawData['rs7412']);
                if (isset($disease['risk_interpretation'][$haplotype])) {
                    $riskScore = log($disease['risk_interpretation'][$haplotype]['risk_multiplier']);
                }
            }

            $riskMultiplier = exp($riskScore);
            $riskLevel = $riskMultiplier >= 3.0 ? 'high' : ($riskMultiplier >= 1.5 ? 'elevated' : ($riskMultiplier <= 0.7 ? 'reduced' : 'average'));

            $results[$diseaseId] = [
                'name' => $disease['name'][$lang] ?? $disease['name']['en'],
                'category' => $disease['category'],
                'evidence_level' => $disease['evidence_level'],
                'risk_multiplier' => round($riskMultiplier, 2),
                'risk_level' => $riskLevel,
                'haplotype' => $haplotype,
                'snps_found' => $snpsFound,
                'snps_total' => $snpsTotal,
                'snp_details' => $snpResults,
                'prevention' => $disease['prevention'][$lang] ?? $disease['prevention']['en'] ?? null,
                'screening' => $disease['screening'][$lang] ?? $disease['screening']['en'] ?? null,
            ];
        }

        return $results;
    }

    /**
     * Generate disease risk report
     */
    public static function generateDiseaseReport(array $diseaseRisk, string $lang = 'ja'): array
    {
        $report = ['high_risk' => [], 'elevated_risk' => [], 'average_risk' => [], 'reduced_risk' => []];

        foreach ($diseaseRisk as $diseaseId => $data) {
            $entry = [
                'disease_id' => $diseaseId,
                'name' => $data['name'],
                'risk_multiplier' => $data['risk_multiplier'],
                'prevention' => $data['prevention'],
                'screening' => $data['screening'],
            ];

            $report[$data['risk_level'] . '_risk'][] = $entry;
        }

        return $report;
    }

    // =========================================================================
    // SECTION: Trait Analysis Methods
    // =========================================================================

    /**
     * Analyze traits
     */
    public static function analyzeTraits(array $rawData, ?string $sex = null, string $lang = 'ja'): array
    {
        $results = [];

        foreach (self::TRAIT_MARKERS as $traitId => $trait) {
            if (isset($trait['sex_specific']) && $sex !== null && $trait['sex_specific'] !== $sex) {
                continue;
            }

            $snpsFound = 0;
            $primaryGenotype = null;

            foreach ($trait['snps'] as $rsId => $snpInfo) {
                if (isset($rawData[$rsId])) {
                    $snpsFound++;
                    if ($primaryGenotype === null) {
                        $primaryGenotype = $rawData[$rsId];
                    }
                }
            }

            if ($snpsFound === 0) continue;

            $phenotypeData = $trait['phenotypes'][$primaryGenotype] ?? null;

            $results[$traitId] = [
                'name' => $trait['name'][$lang] ?? $trait['name']['en'],
                'category' => $trait['category'],
                'genotype' => $primaryGenotype,
                'phenotype' => $phenotypeData['phenotype'][$lang] ?? $phenotypeData['phenotype']['en'] ?? null,
                'description' => $phenotypeData['description'][$lang] ?? $phenotypeData['description']['en'] ?? null,
                'recommendation' => $phenotypeData['recommendation'][$lang] ?? $phenotypeData['recommendation']['en'] ?? null,
            ];
        }

        return $results;
    }

    /**
     * Generate trait report
     */
    public static function generateTraitReport(array $traits, string $lang = 'ja'): array
    {
        $report = ['metabolism' => [], 'nutrition' => [], 'fitness' => [], 'sleep' => [], 'physical' => []];

        foreach ($traits as $traitId => $data) {
            $category = $data['category'] ?? 'other';
            if (isset($report[$category])) {
                $report[$category][] = [
                    'name' => $data['name'],
                    'genotype' => $data['genotype'],
                    'phenotype' => $data['phenotype'],
                    'recommendation' => $data['recommendation'],
                ];
            }
        }

        return $report;
    }

    /**
     * Generate comprehensive report (PGx + Disease Risk + Traits)
     */
    public static function generateComprehensiveReport(array $rawData, ?string $sex = null, string $lang = 'ja'): array
    {
        return [
            'pharmacogenomics' => [
                'profile' => self::parseRawData($rawData, $sex),
                'report' => self::generateReport(self::parseRawData($rawData, $sex), $lang),
            ],
            'disease_risk' => [
                'analysis' => self::analyzeDiseaseRisk($rawData, $sex, $lang),
                'report' => self::generateDiseaseReport(self::analyzeDiseaseRisk($rawData, $sex, $lang), $lang),
            ],
            'traits' => [
                'analysis' => self::analyzeTraits($rawData, $sex, $lang),
                'report' => self::generateTraitReport(self::analyzeTraits($rawData, $sex, $lang), $lang),
            ],
            'data_quality' => self::calculateDataQuality($rawData),
            'cross_analysis' => self::generateCrossAnalysis($rawData, $sex, $lang),
            'rare_variant_warnings' => self::generateRareVariantWarnings($rawData, $lang),
            'metadata' => [
                'sex' => $sex,
                'language' => $lang,
                'generated_at' => date('Y-m-d H:i:s'),
                'version' => '2.1.0',
            ],
        ];
    }

    /**
     * Calculate data quality score (QC)
     * Call Rate = Percentage of successfully read rsIDs
     */
    public static function calculateDataQuality(array $rawData): array
    {
        // Collect all required rsIDs
        $requiredRsids = [
            'pgx' => array_keys(self::SNP_MARKERS),
            'disease' => [],
            'trait' => [],
        ];

        foreach (self::DISEASE_MARKERS as $disease => $info) {
            foreach ($info['snps'] as $rsid => $snpInfo) {
                $requiredRsids['disease'][] = $rsid;
            }
        }

        foreach (self::TRAIT_MARKERS as $trait => $info) {
            foreach ($info['snps'] as $rsid => $snpInfo) {
                $requiredRsids['trait'][] = $rsid;
            }
        }

        // Remove duplicates
        $requiredRsids['disease'] = array_unique($requiredRsids['disease']);
        $requiredRsids['trait'] = array_unique($requiredRsids['trait']);

        // Calculate Call Rate
        $callRates = [];
        $missingRsids = [];

        foreach ($requiredRsids as $category => $rsids) {
            $total = count($rsids);
            $found = 0;
            $missing = [];

            foreach ($rsids as $rsid) {
                if (isset($rawData[$rsid]) && $rawData[$rsid] !== '--' && $rawData[$rsid] !== '00') {
                    $found++;
                } else {
                    $missing[] = $rsid;
                }
            }

            $callRates[$category] = [
                'total' => $total,
                'found' => $found,
                'missing' => count($missing),
                'call_rate' => $total > 0 ? round($found / $total * 100, 1) : 0,
            ];
            $missingRsids[$category] = $missing;
        }

        // Overall score
        $allTotal = $callRates['pgx']['total'] + $callRates['disease']['total'] + $callRates['trait']['total'];
        $allFound = $callRates['pgx']['found'] + $callRates['disease']['found'] + $callRates['trait']['found'];
        $overallCallRate = $allTotal > 0 ? round($allFound / $allTotal * 100, 1) : 0;

        // Confidence grade
        $confidenceGrade = 'A';
        if ($overallCallRate < 95) $confidenceGrade = 'B';
        if ($overallCallRate < 80) $confidenceGrade = 'C';
        if ($overallCallRate < 60) $confidenceGrade = 'D';

        return [
            'overall' => [
                'call_rate' => $overallCallRate,
                'confidence_grade' => $confidenceGrade,
                'confidence_description' => [
                    'ja' => self::getConfidenceDescription($confidenceGrade, 'ja'),
                    'en' => self::getConfidenceDescription($confidenceGrade, 'en'),
                ],
            ],
            'by_category' => $callRates,
            'missing_rsids' => $missingRsids,
            'assessment' => [
                'ja' => $overallCallRate >= 80
                    ? "データ品質は良好です（Call Rate {$overallCallRate}%）。解析結果の信頼性は高いと判断されます。"
                    : "データの " . (100 - $overallCallRate) . "% が欠損しています。一部の判定結果の信頼度が低下している可能性があります。",
                'en' => $overallCallRate >= 80
                    ? "Data quality is good (Call Rate {$overallCallRate}%). Analysis results are considered reliable."
                    : (100 - $overallCallRate) . "% of required data is missing. Some results may have reduced reliability.",
            ],
        ];
    }

    /**
     * Get confidence grade description
     */
    private static function getConfidenceDescription(string $grade, string $lang): string
    {
        $descriptions = [
            'A' => [
                'ja' => '高信頼度 - データ品質は非常に良好',
                'en' => 'High confidence - Data quality is excellent',
            ],
            'B' => [
                'ja' => '標準信頼度 - 一部のrsIDが欠損',
                'en' => 'Standard confidence - Some rsIDs missing',
            ],
            'C' => [
                'ja' => '低信頼度 - 多くのrsIDが欠損、結果は参考程度',
                'en' => 'Low confidence - Many rsIDs missing, results are approximate',
            ],
            'D' => [
                'ja' => '非常に低信頼度 - データ品質に重大な問題あり',
                'en' => 'Very low confidence - Serious data quality issues',
            ],
        ];

        return $descriptions[$grade][$lang] ?? $descriptions['C'][$lang];
    }

    /**
     * Generate Cross-Analysis (compound assessment)
     * Integrated recommendations combining multiple genetic factors
     */
    public static function generateCrossAnalysis(array $rawData, ?string $sex = null, string $lang = 'ja'): array
    {
        $crossRecommendations = [];

        // === Cross-Analysis Rules ===

        // 1. Diabetes risk + Carbohydrate metabolism
        $diabetesRisk = false;
        $carbSensitivity = false;

        // TCF7L2 (rs7903146) - Type 2 diabetes major risk
        if (isset($rawData['rs7903146'])) {
            $gt = $rawData['rs7903146'];
            if ($gt === 'TT' || $gt === 'CT' || $gt === 'TC') {
                $diabetesRisk = true;
            }
        }

        // FTO (rs9939609) - Obesity related
        if (isset($rawData['rs9939609'])) {
            $gt = $rawData['rs9939609'];
            if ($gt === 'AA' || $gt === 'AT' || $gt === 'TA') {
                $carbSensitivity = true;
            }
        }

        if ($diabetesRisk && $carbSensitivity) {
            $crossRecommendations[] = [
                'type' => 'metabolic_syndrome_prevention',
                'priority' => 'highest',
                'factors' => ['type2_diabetes_risk', 'carbohydrate_sensitivity'],
                'recommendation' => [
                    'ja' => '【最優先】糖尿病リスク遺伝子 + 炭水化物感受性の両方が検出されました。糖質制限食を強く推奨します。HbA1c検査を年2回実施してください。',
                    'en' => '[HIGHEST PRIORITY] Both diabetes risk genes and carbohydrate sensitivity detected. Low-carb diet strongly recommended. HbA1c testing twice yearly.',
                ],
            ];
        }

        // 2. Cardiovascular risk + Statin metabolism
        $cardioRisk = false;
        $statinSensitivity = false;

        // 9p21.3 (rs10757278) - Coronary artery disease risk
        if (isset($rawData['rs10757278'])) {
            $gt = $rawData['rs10757278'];
            if ($gt === 'GG' || $gt === 'AG' || $gt === 'GA') {
                $cardioRisk = true;
            }
        }

        // SLCO1B1 (rs4149056) - Statin metabolism
        if (isset($rawData['rs4149056'])) {
            $gt = $rawData['rs4149056'];
            if ($gt === 'CC' || $gt === 'TC' || $gt === 'CT') {
                $statinSensitivity = true;
            }
        }

        if ($cardioRisk && $statinSensitivity) {
            $crossRecommendations[] = [
                'type' => 'cardiovascular_management',
                'priority' => 'high',
                'factors' => ['coronary_artery_disease_risk', 'statin_sensitivity'],
                'recommendation' => [
                    'ja' => '【要注意】心血管リスクがありますが、スタチン（コレステロール薬）による筋障害リスクも高めです。スタチンを使用する場合は低用量から開始し、CK値を定期的にモニタリングしてください。',
                    'en' => '[CAUTION] Cardiovascular risk present, but also elevated risk of statin-induced myopathy. If statins are needed, start with low doses and monitor CK levels regularly.',
                ],
            ];
        }

        // 3. Alzheimer's risk + Caffeine metabolism
        $alzheimerRisk = false;
        $slowCaffeine = false;

        // APOE ε4
        if (isset($rawData['rs429358']) && isset($rawData['rs7412'])) {
            $apoe = self::determineAPOEHaplotype($rawData['rs429358'], $rawData['rs7412']);
            if (str_contains($apoe, 'ε4')) {
                $alzheimerRisk = true;
            }
        }

        // CYP1A2 (rs762551) - Caffeine metabolism
        if (isset($rawData['rs762551'])) {
            $gt = $rawData['rs762551'];
            if ($gt === 'CC') {
                $slowCaffeine = true;
            }
        }

        if ($alzheimerRisk && !$slowCaffeine) {
            $crossRecommendations[] = [
                'type' => 'neuroprotection',
                'priority' => 'moderate',
                'factors' => ['alzheimer_risk', 'normal_caffeine_metabolism'],
                'recommendation' => [
                    'ja' => '【認知症予防】APOE ε4キャリアですが、カフェイン代謝は正常です。適度なコーヒー摂取（1日3-4杯）は認知症リスク低下と関連する研究があります。',
                    'en' => '[NEUROPROTECTION] APOE ε4 carrier with normal caffeine metabolism. Moderate coffee intake (3-4 cups/day) has been associated with reduced dementia risk in studies.',
                ],
            ];
        }

        // 4. Alcohol metabolism + Esophageal cancer risk (heterozygous only = high risk)
        if (isset($rawData['rs671'])) {
            $gt = $rawData['rs671'];

            // GA/AG (heterozygous): HIGH cancer risk if drinking (OR=2.8-3.2)
            if ($gt === 'GA' || $gt === 'AG') {
                $crossRecommendations[] = [
                    'type' => 'alcohol_cancer_prevention',
                    'priority' => 'highest',
                    'factors' => ['aldh2_heterozygous', 'esophageal_cancer_risk'],
                    'recommendation' => [
                        'ja' => '【禁酒推奨】ALDH2ヘテロ型（フラッシャー）です。飲酒習慣がある場合、食道がんリスクが約3倍に上昇します（メタ解析OR=2.8-3.2）。禁酒を強く推奨します。飲酒習慣がある場合は、上部消化管内視鏡検査を年1回受けてください。',
                        'en' => '[ABSTINENCE RECOMMENDED] ALDH2 heterozygous (flusher) detected. If drinking, esophageal cancer risk increases ~3x (meta-analysis OR=2.8-3.2). Abstinence strongly recommended. If drinking regularly, annual upper GI endoscopy advised.',
                    ],
                ];
            }
            // AA (homozygous): Paradoxically LOWER cancer risk because they avoid alcohol
            elseif ($gt === 'AA') {
                $crossRecommendations[] = [
                    'type' => 'alcohol_avoidance_protective',
                    'priority' => 'moderate',
                    'factors' => ['aldh2_homozygous', 'alcohol_intolerance'],
                    'recommendation' => [
                        'ja' => '【情報】ALDH2ホモ欠損型です。アルコールをほぼ代謝できないため、飲酒は非常に不快です。逆説的ですが、飲酒を避けるため食道がんリスクは低い傾向にあります（OR=0.4）。',
                        'en' => '[INFO] ALDH2 homozygous deficiency. You likely cannot tolerate alcohol at all. Paradoxically, this results in LOWER esophageal cancer risk (OR=0.4) because you avoid alcohol.',
                    ],
                ];
            }
        }

        // 5. Folate metabolism + Pregnancy (females only)
        if ($sex === 'female') {
            $mthfrVariant = false;

            if (isset($rawData['rs1801133'])) {
                $gt = $rawData['rs1801133'];
                if ($gt === 'TT' || $gt === 'CT' || $gt === 'TC') {
                    $mthfrVariant = true;
                }
            }

            if ($mthfrVariant) {
                $crossRecommendations[] = [
                    'type' => 'pregnancy_preparation',
                    'priority' => 'high',
                    'factors' => ['mthfr_variant', 'female'],
                    'recommendation' => [
                        'ja' => '【妊活準備】MTHFR変異があります。妊娠を計画する場合、通常の葉酸ではなくメチル葉酸（5-MTHF）を含むサプリメントを妊娠3ヶ月前から摂取してください。神経管欠損症予防に重要です。',
                        'en' => '[PREGNANCY PREPARATION] MTHFR variant detected. If planning pregnancy, take methylfolate (5-MTHF) supplements instead of regular folic acid, starting 3 months before conception. Important for neural tube defect prevention.',
                    ],
                ];
            }
        }

        // 6. Vitamin D metabolism + Osteoporosis risk
        $vitDDeficient = false;

        if (isset($rawData['rs2282679'])) {
            $gt = $rawData['rs2282679'];
            if ($gt === 'CC' || $gt === 'AC' || $gt === 'CA') {
                $vitDDeficient = true;
            }
        }

        if ($vitDDeficient) {
            $crossRecommendations[] = [
                'type' => 'bone_health',
                'priority' => 'moderate',
                'factors' => ['vitamin_d_deficiency_risk'],
                'recommendation' => [
                    'ja' => '【骨健康】ビタミンD代謝効率が低下している可能性があります。定期的な日光浴（週3回15分）、ビタミンD3サプリメント（1000-2000IU/日）、血中25(OH)D濃度の年1回測定を推奨します。',
                    'en' => '[BONE HEALTH] Potentially reduced vitamin D metabolism efficiency. Regular sun exposure (15 min, 3x/week), vitamin D3 supplements (1000-2000 IU/day), and annual 25(OH)D blood level testing recommended.',
                ],
            ];
        }

        return [
            'recommendations' => $crossRecommendations,
            'total_cross_factors' => count($crossRecommendations),
            'summary' => [
                'ja' => count($crossRecommendations) > 0
                    ? count($crossRecommendations) . '件の複合リスク因子が検出されました。これらは個別リスクの単純な合計以上の注意が必要です。'
                    : '特筆すべき複合リスク因子は検出されませんでした。',
                'en' => count($crossRecommendations) > 0
                    ? count($crossRecommendations) . ' cross-risk factors detected. These require more attention than the sum of individual risks.'
                    : 'No notable cross-risk factors detected.',
            ],
        ];
    }

    /**
     * Generate rare variant warnings
     * Clarify limitations of consumer genetic testing
     */
    public static function generateRareVariantWarnings(array $rawData, string $lang = 'ja'): array
    {
        $warnings = [];

        // BRCA1/BRCA2 - 23andMe detects only 3 variants
        $warnings[] = [
            'gene' => 'BRCA1/BRCA2',
            'condition' => [
                'ja' => '遺伝性乳がん・卵巣がん',
                'en' => 'Hereditary Breast and Ovarian Cancer',
            ],
            'limitation' => [
                'ja' => '23andMeは3つのアシュケナージ系ユダヤ人に多い変異のみを検出します。BRCA1/2には1,000以上の病的変異が存在し、その大部分は検出されません。',
                'en' => '23andMe detects only 3 variants common in Ashkenazi Jewish populations. BRCA1/2 have over 1,000 pathogenic variants, most of which are NOT detected.',
            ],
            'recommendation' => [
                'ja' => '家族歴（乳がん・卵巣がん・膵臓がん・前立腺がん）がある場合は、必ず医療機関での包括的BRCA遺伝子検査を受けてください。',
                'en' => 'If you have family history of breast, ovarian, pancreatic, or prostate cancer, comprehensive clinical BRCA testing is strongly recommended.',
            ],
            'severity' => 'critical',
        ];

        // CYP2D6 - CNV not detectable
        $warnings[] = [
            'gene' => 'CYP2D6',
            'condition' => [
                'ja' => '薬物代謝（コデイン、タモキシフェン等）',
                'en' => 'Drug Metabolism (codeine, tamoxifen, etc.)',
            ],
            'limitation' => [
                'ja' => 'CYP2D6遺伝子のコピー数変異（CNV）は検出できません。遺伝子欠失（*5）や遺伝子重複は、代謝能力に大きく影響しますが、この解析では検出されません。',
                'en' => 'Copy Number Variations (CNV) of CYP2D6 cannot be detected. Gene deletions (*5) or duplications significantly affect metabolism but are NOT detected in this analysis.',
            ],
            'recommendation' => [
                'ja' => 'コデイン、トラマドール、タモキシフェンなどCYP2D6依存薬を処方される場合は、臨床的な薬理遺伝学検査の実施を医師に相談してください。',
                'en' => 'If prescribed CYP2D6-dependent drugs (codeine, tramadol, tamoxifen), discuss clinical pharmacogenomic testing with your physician.',
            ],
            'severity' => 'high',
        ];

        // Lynch Syndrome (HNPCC)
        $warnings[] = [
            'gene' => 'MLH1/MSH2/MSH6/PMS2',
            'condition' => [
                'ja' => 'リンチ症候群（遺伝性大腸がん）',
                'en' => 'Lynch Syndrome (Hereditary Colorectal Cancer)',
            ],
            'limitation' => [
                'ja' => 'リンチ症候群の原因遺伝子は、消費者向け遺伝子検査ではほとんど検査されません。',
                'en' => 'Lynch syndrome genes are rarely included in consumer genetic tests.',
            ],
            'recommendation' => [
                'ja' => '50歳未満での大腸がん、子宮内膜がん、または複数の近親者にこれらのがんがある場合は、遺伝カウンセリングと臨床遺伝子検査を検討してください。',
                'en' => 'If colorectal or endometrial cancer before age 50, or multiple relatives with these cancers, consider genetic counseling and clinical testing.',
            ],
            'severity' => 'high',
        ];

        // Rare drug reactions
        $warnings[] = [
            'gene' => 'Various',
            'condition' => [
                'ja' => '希少な重篤薬物反応',
                'en' => 'Rare Severe Drug Reactions',
            ],
            'limitation' => [
                'ja' => 'スティーブンス・ジョンソン症候群などの重篤な薬物反応に関連するHLA変異（HLA-B*5701, HLA-B*1502等）は、多くの消費者向けテストでは検査されません。',
                'en' => 'HLA variants associated with severe drug reactions like Stevens-Johnson Syndrome (HLA-B*5701, HLA-B*1502, etc.) are not tested in most consumer tests.',
            ],
            'recommendation' => [
                'ja' => 'アバカビル、カルバマゼピン、アロプリノールを処方される前に、医師にHLA検査について相談してください。',
                'en' => 'Before being prescribed abacavir, carbamazepine, or allopurinol, discuss HLA testing with your physician.',
            ],
            'severity' => 'moderate',
        ];

        return [
            'warnings' => $warnings,
            'general_disclaimer' => [
                'ja' => 'この解析は消費者向け遺伝子検査データに基づいており、臨床検査の代替にはなりません。陰性結果は、リスクがないことを意味しません。家族歴や症状がある場合は、必ず医療専門家に相談してください。',
                'en' => 'This analysis is based on consumer genetic testing data and does NOT replace clinical testing. A negative result does NOT mean absence of risk. Always consult healthcare professionals if you have family history or symptoms.',
            ],
        ];
    }

    /**
     * Generate standardized format for JSON output
     * Portable Genome Record (PGR) format
     */
    public static function exportAsPortableGenomeRecord(array $rawData, ?string $sex = null): array
    {
        $report = self::generateComprehensiveReport($rawData, $sex, 'en');

        return [
            'pgr_version' => '1.0',
            'schema' => 'https://kanarazu-project.com/pgr/v1/schema.json',
            'generated_by' => '000h_genetics.php',
            'generated_at' => date('c'),
            'data_quality' => $report['data_quality'],
            'subject' => [
                'sex' => $sex,
                'anonymized' => true,
            ],
            'pharmacogenomics' => [
                'phenotypes' => $report['pharmacogenomics']['profile'] ?? [],
                'recommendations' => $report['pharmacogenomics']['report'] ?? [],
            ],
            'disease_risk' => [
                'assessments' => $report['disease_risk']['analysis'] ?? [],
                'risk_categories' => $report['disease_risk']['report'] ?? [],
            ],
            'traits' => [
                'phenotypes' => $report['traits']['analysis'] ?? [],
                'recommendations' => $report['traits']['report'] ?? [],
            ],
            'cross_analysis' => $report['cross_analysis'] ?? [],
            'rare_variant_warnings' => $report['rare_variant_warnings'] ?? [],
            'checksum' => md5(json_encode($rawData)),
        ];
    }
}
