import os

def convert_turkish_to_english(text):
    turkish_characters = "çÇğĞıİöÖşŞüÜ"
    english_characters = "cCgGiIoOsSuU"
    converted_text = ""
    for char in text:
        if char in turkish_characters:
            index = turkish_characters.index(char)
            converted_text += english_characters[index]
        else:
            converted_text += char
    return converted_text

def process_files(input_dir, output_dir):
    for root, dirs, files in os.walk(input_dir):
        for file_name in files:
            if file_name.endswith(".php"):
                input_file = os.path.join(root, file_name)
                output_root = root.replace(input_dir, output_dir)
                if not os.path.exists(output_root):
                    os.makedirs(output_root)
                output_file = os.path.join(output_root, file_name)
                
                with open(input_file, 'r', encoding='utf-8') as file:
                    content = file.read()
                    content = convert_turkish_to_english(content)
                
                with open(output_file, 'w', encoding='utf-8') as file:
                    file.write(content)

input_dir = "trchar"
output_dir = "engchar"

if not os.path.exists(output_dir):
    os.makedirs(output_dir)

process_files(input_dir, output_dir)

print("Turkish characters converted to English and new files created.")
