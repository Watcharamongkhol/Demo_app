from flask import Flask, request, jsonify
import pickle
import numpy as np

app = Flask(__name__)

model = pickle.load(open("knn_diabetes.pkl","rb"))

@app.route("/predict", methods=["POST"])
def predict():

    data = request.get_json()

    input_data = np.array([[
        data["Age"],
        data["Diabetes"],
        data["Hypertension"],
        data["Protein_in_Urine"],
        data["Water_Intake"],
        data["Urine_Output"]
    ]])

    prediction = model.predict(input_data)[0]

    risk_percent = 80 if prediction == 1 else 20

    return jsonify({
        "prediction": int(prediction),
        "risk_percent": risk_percent
    })

if __name__ == "__main__":
    app.run(port=5000)
